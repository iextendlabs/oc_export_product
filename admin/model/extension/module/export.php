<?php
class ModelExtensionModuleExport extends Model {
    public function getAllProducts() {
		$query = $this->db->query("SELECT p.product_id,p.model,p.image,p.sku,p.upc,p.ean,p.jan,p.isbn,p.mpn,p.location,p.quantity,p.stock_status_id,p.manufacturer_id,p.shipping,p.price,p.points,p.points,p.tax_class_id,p.date_available,p.weight,p.weight_class_id,p.length,p.width,p.height,p.length_class_id,p.subtract,p.minimum,p.sort_order,p.status,p.viewed,p.date_added,p.date_modified,pd.name AS product_name,pd.description,pd.tag,pd.meta_title,pd.meta_description,pd.meta_keyword,ss.name AS stock_status,m.name AS manufaturer_name,tc.title AS tax_class,lcd.title AS length_class,wcd.title AS weight_class,pa.attribute_id,ad.name AS attribute_name,pa.text AS attribute_value FROM oc_product p LEFT JOIN oc_product_description pd ON (p.product_id = pd.product_id) LEFT JOIN oc_stock_status ss ON (p.stock_status_id = ss.stock_status_id) LEFT JOIN oc_manufacturer m ON (p.manufacturer_id = m.manufacturer_id) LEFT JOIN oc_tax_class tc ON(p.tax_class_id = tc.tax_class_id) LEFT JOIN oc_length_class_description lcd ON (p.length_class_id = lcd.length_class_id) LEFT JOIN oc_weight_class_description wcd ON (p.weight_class_id = wcd.weight_class_id) LEFT JOIN oc_product_attribute pa ON (p.product_id = pa.product_id) LEFT JOIN oc_attribute_description ad ON (pa.attribute_id = ad.attribute_id)");

		return $query->rows;
	}

	public function getAllCategory($product_id) {
		$query = $this->db->query("SELECT GROUP_CONCAT(cd.name) AS category_name FROM oc_product p LEFT JOIN oc_product_to_category pc ON (p.product_id=pc.product_id) LEFT JOIN oc_category_description cd ON (pc.category_id = cd.category_id) WHERE p.product_id = '" . (int)$product_id . "'");

		return $query->row['category_name'];
	}

	public function getRelatedProduct($product_id) {
		$query = $this->db->query("SELECT GROUP_CONCAT(pd.name) AS related_product FROM oc_product p LEFT JOIN oc_product_related pr ON(p.product_id = pr.product_id) LEFT JOIN oc_product_description pd ON (pd.product_id=pr.related_id) WHERE p.product_id = '" . (int)$product_id . "'");

		return $query->row['related_product'];
	}

	public function getAdditionalImage($product_id) {
		$query = $this->db->query("SELECT image FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "'");

		return $query->rows;
	}
}