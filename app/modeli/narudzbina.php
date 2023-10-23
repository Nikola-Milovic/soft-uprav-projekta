<?php

namespace Model;

class NarudzbinaModel {

	use PocetniModel;

	protected $tabela = 'orders_nm1';

	public function poruci($korpa, $korisnik, $narudzbina) {
		$itemIds = [];
		$itemNames = [];
		$total = 0;

		foreach ($korpa as $jeloId => $jelo) {
				$itemIds[] = $jelo->id;
				$itemNames[] = "{$jelo->name} X 1";  
				$total += $jelo->price;
		}

		$orderData = [
				'id' => uniqid('order-'),  
				'user_id' => $korisnik->id,
				'items_ids' => implode(',', $itemIds),
				'items_names' => implode(', ', $itemNames),
				'total' => $total
		];

		$this->umetni($orderData);

		return $orderData['id'];
	}

	public function dohvatiNarudzbePoUserId($userId) {
		return $this->where(['user_id' => $userId]);
	}
}
