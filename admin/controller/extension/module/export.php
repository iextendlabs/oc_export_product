<?php
class ControllerExtensionModuleExport extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('extension/module/export');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_export', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/export', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/export', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_export_status'])) {
			$data['module_export_status'] = $this->request->post['module_export_status'];
		} else {
			$data['module_export_status'] = $this->config->get('module_export_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/export', $data));
	}

	public function productExport() {
		
		$this->load->language('extension/module/export');

		$this->document->setTitle($this->language->get('text_export_product'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_product_product_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_product_name', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_image', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_description', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_model', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_quantity', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_price', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_stock_status_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_stock_status', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_manufacturer_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_manufaturer_name', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_related_product', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_product_status', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_viewed', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_category', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_tax_class_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_tax_class', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_sku', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_upc', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_ean', $this->request->post);
            $this->model_setting_setting->editSetting('module_product_jan', $this->request->post);
            $this->model_setting_setting->editSetting('module_product_isbn', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_mpn', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_location', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_shipping', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_points', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_weight', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_weight_class_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_weight_class', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_length', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_width', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_height', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_length_class_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_length_class', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_subtract', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_minimum', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_sort_order', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_tag', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_meta_title', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_meta_description', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_meta_keyword', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_date_added', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_date_modified', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_date_available', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_attribute_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_attribute_name', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_attribute_value', $this->request->post);
			$this->model_setting_setting->editSetting('module_image_product_id', $this->request->post);
			$this->model_setting_setting->editSetting('module_product_additional_images', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/export', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_product_product_id_status'])) {
			$data['module_product_product_id_status'] = $this->request->post['module_product_product_id_status'];
		} else {
			$data['module_product_product_id_status'] = $this->config->get('module_product_product_id_status');
		}

		if (isset($this->request->post['module_product_product_name_status'])) {
			$data['module_product_product_name_status'] = $this->request->post['module_product_product_name_status'];
		} else {
			$data['module_product_product_name_status'] = $this->config->get('module_product_product_name_status');
		}

		if (isset($this->request->post['module_product_image_status'])) {
			$data['module_product_image_status'] = $this->request->post['module_product_image_status'];
		} else {
			$data['module_product_image_status'] = $this->config->get('module_product_image_status');
		}

		if (isset($this->request->post['module_product_description_status'])) {
			$data['module_product_description_status'] = $this->request->post['module_product_description_status'];
		} else {
			$data['module_product_description_status'] = $this->config->get('module_product_description_status');
		}

		if (isset($this->request->post['module_product_model_status'])) {
			$data['module_product_model_status'] = $this->request->post['module_product_model_status'];
		} else {
			$data['module_product_model_status'] = $this->config->get('module_product_model_status');
		}

		if (isset($this->request->post['module_product_quantity_status'])) {
			$data['module_product_quantity_status'] = $this->request->post['module_product_quantity_status'];
		} else {
			$data['module_product_quantity_status'] = $this->config->get('module_product_quantity_status');
		}

		if (isset($this->request->post['module_product_price_status'])) {
			$data['module_product_price_status'] = $this->request->post['module_product_price_status'];
		} else {
			$data['module_product_price_status'] = $this->config->get('module_product_price_status');
		}

		if (isset($this->request->post['module_product_stock_status_id_status'])) {
			$data['module_product_stock_status_id_status'] = $this->request->post['module_product_stock_status_id_status'];
		} else {
			$data['module_product_stock_status_id_status'] = $this->config->get('module_product_stock_status_id_status');
		}

		if (isset($this->request->post['module_product_stock_status_status'])) {
			$data['module_product_stock_status_status'] = $this->request->post['module_product_stock_status_status'];
		} else {
			$data['module_product_stock_status_status'] = $this->config->get('module_product_stock_status_status');
		}

		if (isset($this->request->post['module_product_manufacturer_id_status'])) {
			$data['module_product_manufacturer_id_status'] = $this->request->post['module_product_manufacturer_id_status'];
		} else {
			$data['module_product_manufacturer_id_status'] = $this->config->get('module_product_manufacturer_id_status');
		}

		if (isset($this->request->post['module_product_manufaturer_name_status'])) {
			$data['module_product_manufaturer_name_status'] = $this->request->post['module_product_manufaturer_name_status'];
		} else {
			$data['module_product_manufaturer_name_status'] = $this->config->get('module_product_manufaturer_name_status');
		}

		if (isset($this->request->post['module_product_related_product_status'])) {
			$data['module_product_related_product_status'] = $this->request->post['module_product_related_product_status'];
		} else {
			$data['module_product_related_product_status'] = $this->config->get('module_product_related_product_status');
		}

		if (isset($this->request->post['module_product_product_status_status'])) {
			$data['module_product_product_status_status'] = $this->request->post['module_product_product_status_status'];
		} else {
			$data['module_product_product_status_status'] = $this->config->get('module_product_product_status_status');
		}

		if (isset($this->request->post['module_product_viewed_status'])) {
			$data['module_product_viewed_status'] = $this->request->post['module_product_viewed_status'];
		} else {
			$data['module_product_viewed_status'] = $this->config->get('module_product_viewed_status');
		}

		if (isset($this->request->post['module_product_category_status'])) {
			$data['module_product_category_status'] = $this->request->post['module_product_category_status'];
		} else {
			$data['module_product_category_status'] = $this->config->get('module_product_category_status');
		}

		if (isset($this->request->post['module_product_tax_class_id_status'])) {
			$data['module_product_tax_class_id_status'] = $this->request->post['module_product_tax_class_id_status'];
		} else {
			$data['module_product_tax_class_id_status'] = $this->config->get('module_product_tax_class_id_status');
		}

		if (isset($this->request->post['module_product_tax_class_status'])) {
			$data['module_product_tax_class_status'] = $this->request->post['module_product_tax_class_status'];
		} else {
			$data['module_product_tax_class_status'] = $this->config->get('module_product_tax_class_status');
		}

		if (isset($this->request->post['module_product_sku_status'])) {
			$data['module_product_sku_status'] = $this->request->post['module_product_sku_status'];
		} else {
			$data['module_product_sku_status'] = $this->config->get('module_product_sku_status');
		}

		if (isset($this->request->post['module_product_upc_status'])) {
			$data['module_product_upc_status'] = $this->request->post['module_product_upc_status'];
		} else {
			$data['module_product_upc_status'] = $this->config->get('module_product_upc_status');
		}

		if (isset($this->request->post['module_product_ean_status'])) {
			$data['module_product_ean_status'] = $this->request->post['module_product_ean_status'];
		} else {
			$data['module_product_ean_status'] = $this->config->get('module_product_ean_status');
		}

        if (isset($this->request->post['module_product_jan_status'])) {
			$data['module_product_jan_status'] = $this->request->post['module_product_jan_status'];
		} else {
			$data['module_product_jan_status'] = $this->config->get('module_product_jan_status');
		}

        if (isset($this->request->post['module_product_isbn_status'])) {
			$data['module_product_isbn_status'] = $this->request->post['module_product_isbn_status'];
		} else {
			$data['module_product_isbn_status'] = $this->config->get('module_product_isbn_status');
		}

        if (isset($this->request->post['module_product_mpn_status'])) {
			$data['module_product_mpn_status'] = $this->request->post['module_product_mpn_status'];
		} else {
			$data['module_product_mpn_status'] = $this->config->get('module_product_mpn_status');
		}

        if (isset($this->request->post['module_product_location_status'])) {
			$data['module_product_location_status'] = $this->request->post['module_product_location_status'];
		} else {
			$data['module_product_location_status'] = $this->config->get('module_product_location_status');
		}

        if (isset($this->request->post['module_product_shipping_status'])) {
			$data['module_product_shipping_status'] = $this->request->post['module_product_shipping_status'];
		} else {
			$data['module_product_shipping_status'] = $this->config->get('module_product_shipping_status');
		}

        if (isset($this->request->post['module_product_points_status'])) {
			$data['module_product_points_status'] = $this->request->post['module_product_points_status'];
		} else {
			$data['module_product_points_status'] = $this->config->get('module_product_points_status');
		}

        if (isset($this->request->post['module_product_weight_status'])) {
			$data['module_product_weight_status'] = $this->request->post['module_product_weight_status'];
		} else {
			$data['module_product_weight_status'] = $this->config->get('module_product_weight_status');
		}

        if (isset($this->request->post['module_product_weight_class_id_status'])) {
			$data['module_product_weight_class_id_status'] = $this->request->post['module_product_weight_class_id_status'];
		} else {
			$data['module_product_weight_class_id_status'] = $this->config->get('module_product_weight_class_id_status');
		}

        if (isset($this->request->post['module_product_weight_class_status'])) {
			$data['module_product_weight_class_status'] = $this->request->post['module_product_weight_class_status'];
		} else {
			$data['module_product_weight_class_status'] = $this->config->get('module_product_weight_class_status');
		}

        if (isset($this->request->post['module_product_length_status'])) {
			$data['module_product_length_status'] = $this->request->post['module_product_length_status'];
		} else {
			$data['module_product_length_status'] = $this->config->get('module_product_length_status');
		}

        if (isset($this->request->post['module_product_width_status'])) {
			$data['module_product_width_status'] = $this->request->post['module_product_width_status'];
		} else {
			$data['module_product_width_status'] = $this->config->get('module_product_width_status');
		}

        if (isset($this->request->post['module_product_height_status'])) {
			$data['module_product_height_status'] = $this->request->post['module_product_height_status'];
		} else {
			$data['module_product_height_status'] = $this->config->get('module_product_height_status');
		}

        if (isset($this->request->post['module_product_length_class_id_status'])) {
			$data['module_product_length_class_id_status'] = $this->request->post['module_product_length_class_id_status'];
		} else {
			$data['module_product_length_class_id_status'] = $this->config->get('module_product_length_class_id_status');
		}

        if (isset($this->request->post['module_product_length_class_status'])) {
			$data['module_product_length_class_status'] = $this->request->post['module_product_length_class_status'];
		} else {
			$data['module_product_length_class_status'] = $this->config->get('module_product_length_class_status');
		}

        if (isset($this->request->post['module_product_subtract_status'])) {
			$data['module_product_subtract_status'] = $this->request->post['module_product_subtract_status'];
		} else {
			$data['module_product_subtract_status'] = $this->config->get('module_product_subtract_status');
		}

        if (isset($this->request->post['module_product_minimum_status'])) {
			$data['module_product_minimum_status'] = $this->request->post['module_product_minimum_status'];
		} else {
			$data['module_product_minimum_status'] = $this->config->get('module_product_minimum_status');
		}

        if (isset($this->request->post['module_product_sort_order_status'])) {
			$data['module_product_sort_order_status'] = $this->request->post['module_product_sort_order_status'];
		} else {
			$data['module_product_sort_order_status'] = $this->config->get('module_product_sort_order_status');
		}

        if (isset($this->request->post['module_product_tag_status'])) {
			$data['module_product_tag_status'] = $this->request->post['module_product_tag_status'];
		} else {
			$data['module_product_tag_status'] = $this->config->get('module_product_tag_status');
		}

        if (isset($this->request->post['module_product_meta_title_status'])) {
			$data['module_product_meta_title_status'] = $this->request->post['module_product_meta_title_status'];
		} else {
			$data['module_product_meta_title_status'] = $this->config->get('module_product_meta_title_status');
		}

        if (isset($this->request->post['module_product_meta_description_status'])) {
			$data['module_product_meta_description_status'] = $this->request->post['module_product_meta_description_status'];
		} else {
			$data['module_product_meta_description_status'] = $this->config->get('module_product_meta_description_status');
		}

        if (isset($this->request->post['module_product_meta_keyword_status'])) {
			$data['module_product_meta_keyword_status'] = $this->request->post['module_product_meta_keyword_status'];
		} else {
			$data['module_product_meta_keyword_status'] = $this->config->get('module_product_meta_keyword_status');
		}

        if (isset($this->request->post['module_product_date_added_status'])) {
			$data['module_product_date_added_status'] = $this->request->post['module_product_date_added_status'];
		} else {
			$data['module_product_date_added_status'] = $this->config->get('module_product_date_added_status');
		}

        if (isset($this->request->post['module_product_date_modified_status'])) {
			$data['module_product_date_modified_status'] = $this->request->post['module_product_date_modified_status'];
		} else {
			$data['module_product_date_modified_status'] = $this->config->get('module_product_date_modified_status');
		}

        if (isset($this->request->post['module_product_date_available_status'])) {
			$data['module_product_date_available_status'] = $this->request->post['module_product_date_available_status'];
		} else {
			$data['module_product_date_available_status'] = $this->config->get('module_product_date_available_status');
		}

        if (isset($this->request->post['module_product_attribute_id_status'])) {
			$data['module_product_attribute_id_status'] = $this->request->post['module_product_attribute_id_status'];
		} else {
			$data['module_product_attribute_id_status'] = $this->config->get('module_product_attribute_id_status');
		}

        if (isset($this->request->post['module_product_attribute_name_status'])) {
			$data['module_product_attribute_name_status'] = $this->request->post['module_product_attribute_name_status'];
		} else {
			$data['module_product_attribute_name_status'] = $this->config->get('module_product_attribute_name_status');
		}

        if (isset($this->request->post['module_product_attribute_value_status'])) {
			$data['module_product_attribute_value_status'] = $this->request->post['module_product_attribute_value_status'];
		} else {
			$data['module_product_attribute_value_status'] = $this->config->get('module_product_attribute_value_status');
		}

		if (isset($this->request->post['module_image_product_id_status'])) {
			$data['module_image_product_id_status'] = $this->request->post['module_image_product_id_status'];
		} else {
			$data['module_image_product_id_status'] = $this->config->get('module_image_product_id_status');
		}

		if (isset($this->request->post['module_product_additional_images_status'])) {
			$data['module_product_additional_images_status'] = $this->request->post['module_product_additional_images_status'];
		} else {
			$data['module_product_additional_images_status'] = $this->config->get('module_product_additional_images_status');
		}

		$data['href_exportProductData'] = $this->url->link('extension/module/export/exportProductData', 'user_token=' . $this->session->data['user_token'], true);
		$data['href_exportProductImage'] = $this->url->link('extension/module/export/exportProductImage', 'user_token=' . $this->session->data['user_token'], true);
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/export_product', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/export')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function exportProductData(){

		$this->load->model('extension/module/export');
		
		$file_name = 'Product_Data.csv';
		header("Content-Description: File File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv");

		$file = fopen("php://output","w");

		$header = array();

		if ($this->config->get('module_product_product_id_status')) {
			$header[]= 'Product Id';
		}
		if ($this->config->get('module_product_product_name_status')) {
			$header[]= 'Name';
		}
		if ($this->config->get('module_product_image_status')) {
			$header[]= 'Image';
		}
		if ($this->config->get('module_product_description_status')) {
			$header[]= 'Description';
		}
		if ($this->config->get('module_product_model_status')) {
			$header[]= 'Model';
		}
		if ($this->config->get('module_product_quantity_status')) {
			$header[]= 'Quantity';
		}
		if ($this->config->get('module_product_price_status')) {
			$header[]= 'Price';
		}
		if ($this->config->get('module_product_stock_status_id_status')) {
			$header[]= 'Stock Status ID';
		}
		if ($this->config->get('module_product_stock_status_status')) {
			$header[]= 'Stock Status';
		}
		if ($this->config->get('module_product_manufacturer_id_status')) {
			$header[]= 'Manufacturer ID';
		}
		if ($this->config->get('module_product_manufaturer_name_status')) {
			$header[]= 'Manufacturer Name';
		}
		if ($this->config->get('module_product_related_product_status')) {
			$header[]= 'Related Product';
		}
		if ($this->config->get('module_product_product_status_status')) {
			$header[]= 'Status';
		}
		if ($this->config->get('module_product_viewed_status')) {
			$header[]= 'Viewed';
		}
		if ($this->config->get('module_product_category_status')) {
			$header[]= 'Categorie';
		}
		if ($this->config->get('module_product_tax_class_id_status')) {
			$header[]= 'Tax Class Id';
		}
		if ($this->config->get('module_product_tax_class_status')) {
			$header[]= 'Tax Class';
		}
		if ($this->config->get('module_product_sku_status')) {
			$header[]= 'SKU';
		}
		if ($this->config->get('module_product_upc_status')) {
			$header[]= 'UPC';
		}
		if ($this->config->get('module_product_ean_status')) {
			$header[]= 'EAN';
		}
		if ($this->config->get('module_product_jan_status')) {
			$header[]= 'JAN';
		}
		if ($this->config->get('module_product_isbn_status')) {
			$header[]= 'ISBN';
		}
		if ($this->config->get('module_product_mpn_status')) {
			$header[]= 'MPN';
		}
		if ($this->config->get('module_product_location_status')) {
			$header[]= 'Location';
		}
		if ($this->config->get('module_product_shipping_status')) {
			$header[]= 'Shipping';
		}
		if ($this->config->get('module_product_points_status')) {
			$header[]= 'Points';
		}
		if ($this->config->get('module_product_weight_status')) {
			$header[]= 'Weight';
		}
		if ($this->config->get('module_product_weight_class_id_status')) {
			$header[]= 'Weight Class Id';
		}
		if ($this->config->get('module_product_weight_class_status')) {
			$header[]= 'Weight Class';
		}
		if ($this->config->get('module_product_length_status')) {
			$header[]= 'Length';
		}
		if ($this->config->get('module_product_width_status')) {
			$header[]= 'Width';
		}
		if ($this->config->get('module_product_height_status')) {
			$header[]= 'Height';
		}
		if ($this->config->get('module_product_length_class_id_status')) {
			$header[]= 'Length Class Id';
		}
		if ($this->config->get('module_product_length_class_status')) {
			$header[]= 'Length Class';
		}
		if ($this->config->get('module_product_subtract_status')) {
			$header[]= 'subtract';
		}
		if ($this->config->get('module_product_minimum_status')) {
			$header[]= 'Minimum';
		}
		if ($this->config->get('module_product_sort_order_status')) {
			$header[]= 'Sort Order';
		}
		if ($this->config->get('module_product_tag_status')) {
			$header[]= 'Tag';
		}
		if ($this->config->get('module_product_meta_title_status')) {
			$header[]= 'Meta Title';
		}
		if ($this->config->get('module_product_meta_description_status')) {
			$header[]= 'Meta Description';
		}
		if ($this->config->get('module_product_meta_keyword_status')) {
			$header[]= 'Meta Keyword';
		}
		if ($this->config->get('module_product_date_added_status')) {
			$header[]= 'Date Added';
		}
		if ($this->config->get('module_product_date_modified_status')) {
			$header[]= 'Date Modified';
		}
		if ($this->config->get('module_product_date_available_status')) {
			$header[]= 'Date Available';
		}
		if ($this->config->get('module_product_attribute_id_status')) {
			$header[]= 'Attribute Id';
		}
		if ($this->config->get('module_product_attribute_name_status')) {
			$header[]= 'Attribute Name';
		}
		if ($this->config->get('module_product_attribute_value_status')) {
			$header[]= 'Attribute Value';
		}

		fputcsv($file,$header);

		$results = $this->model_extension_module_export->getAllProducts();

		foreach ($results as $result) {
			
			$export_data = array();

			if ($this->config->get('module_product_product_id_status')) {
				$export_data[]= $result['product_id'];
			}
			if ($this->config->get('module_product_product_name_status')) {
				$export_data[]= $result['product_name'];
			}
			if ($this->config->get('module_product_image_status')) {
				$export_data[]= $result['image'];
			}
			if ($this->config->get('module_product_description_status')) {
				$export_data[]= strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'));
			}
			if ($this->config->get('module_product_model_status')) {
				$export_data[]= $result['model'];
			}
			if ($this->config->get('module_product_quantity_status')) {
				$export_data[]= $result['quantity'];
			}
			if ($this->config->get('module_product_price_status')) {
				$export_data[]= $result['price'];
			}
			if ($this->config->get('module_product_stock_status_id_status')) {
				$export_data[]= $result['stock_status_id'];
			}
			if ($this->config->get('module_product_stock_status_status')) {
				$export_data[]= $result['stock_status'];
			}
			if ($this->config->get('module_product_manufacturer_id_status')) {
				$export_data[]= $result['manufacturer_id'];
			}
			if ($this->config->get('module_product_manufaturer_name_status')) {
				$export_data[]= $result['manufaturer_name'];
			}
			if ($this->config->get('module_product_related_product_status')) {
				$export_data[]= $this->model_extension_module_export->getRelatedProduct($result['product_id']);
			}
			if ($this->config->get('module_product_product_status_status')) {
				if ($result['status']==1) {
					$export_data[]= "Enable";
				}elseif($result['status']==0){
					$export_data[]= "Disable";
				}
			}
			if ($this->config->get('module_product_viewed_status')) {
				$export_data[]= $result['viewed'];
			}
			if ($this->config->get('module_product_category_status')) {
				$export_data[]= $this->model_extension_module_export->getAllCategory($result['product_id']);
			}
			if ($this->config->get('module_product_tax_class_id_status')) {
				$export_data[]= $result['tax_class_id'];
			}
			if ($this->config->get('module_product_tax_class_status')) {
				$export_data[]= $result['tax_class'];
			}
			if ($this->config->get('module_product_sku_status')) {
				$export_data[]= $result['sku'];
			}
			if ($this->config->get('module_product_upc_status')) {
				$export_data[]= $result['upc'];
			}
			if ($this->config->get('module_product_ean_status')) {
				$export_data[]= $result['ean'];
			}
			if ($this->config->get('module_product_jan_status')) {
				$export_data[]= $result['jan'];
			}
			if ($this->config->get('module_product_isbn_status')) {
				$export_data[]= $result['isbn'];
			}
			if ($this->config->get('module_product_mpn_status')) {
				$export_data[]= $result['mpn'];
			}
			if ($this->config->get('module_product_location_status')) {
				$export_data[]= $result['location'];
			}
			if ($this->config->get('module_product_shipping_status')) {
				$export_data[]= $result['shipping'];
			}
			if ($this->config->get('module_product_points_status')) {
				$export_data[]= $result['points'];
			}
			if ($this->config->get('module_product_weight_status')) {
				$export_data[]= $result['weight'];
			}
			if ($this->config->get('module_product_weight_class_id_status')) {
				$export_data[]= $result['weight_class_id'];
			}
			if ($this->config->get('module_product_weight_class_status')) {
				$export_data[]= $result['weight_class'];
			}
			if ($this->config->get('module_product_length_status')) {
				$export_data[]= $result['length'];
			}
			if ($this->config->get('module_product_width_status')) {
				$export_data[]= $result['width'];
			}
			if ($this->config->get('module_product_height_status')) {
				$export_data[]= $result['height'];
			}
			if ($this->config->get('module_product_length_class_id_status')) {
				$export_data[]= $result['length_class_id'];
			}
			if ($this->config->get('module_product_length_class_status')) {
				$export_data[]= $result['length_class'];
			}
			if ($this->config->get('module_product_subtract_status')) {
				if ($result['subtract']==1) {
					$export_data[]= "Yes";
				}elseif($result['subtract']==0){
					$export_data[]= "No";
				}
			}
			if ($this->config->get('module_product_minimum_status')) {
				$export_data[]= $result['minimum'];
			}
			if ($this->config->get('module_product_sort_order_status')) {
				$export_data[]= $result['sort_order'];
			}
			if ($this->config->get('module_product_tag_status')) {
				$export_data[]= $result['tag'];
			}
			if ($this->config->get('module_product_meta_title_status')) {
				$export_data[]= $result['meta_title'];
			}
			if ($this->config->get('module_product_meta_description_status')) {
				$export_data[]= $result['meta_description'];
			}
			if ($this->config->get('module_product_meta_keyword_status')) {
				$export_data[]= $result['meta_keyword'];
			}
			if ($this->config->get('module_product_date_added_status')) {
				$export_data[]= $result['date_added'];
			}
			if ($this->config->get('module_product_date_modified_status')) {
				$export_data[]= $result['date_modified'];
			}
			if ($this->config->get('module_product_date_available_status')) {
				$export_data[]= $result['date_available'];
			}
			if ($this->config->get('module_product_attribute_id_status')) {
				$export_data[]= $result['attribute_id'];
			}
			if ($this->config->get('module_product_attribute_name_status')) {
				$export_data[]= $result['attribute_name'];
			}
			if ($this->config->get('module_product_attribute_value_status')) {
				$export_data[]= $result['attribute_value'];
			}

			fputcsv($file,$export_data);
		} 
		
		fclose($file);
		exit;
	}

	public function exportProductImage(){

		$this->load->model('extension/module/export');
		
		$file_name = 'Product_Image.csv';
		header("Content-Description: File File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv");

		$file = fopen("php://output","w");
		$header = array();

		if ($this->config->get('module_image_product_id_status')) {
			$header[]= 'Product Id';
		}
		if ($this->config->get('module_product_additional_images_status')) {
			$header[]= 'Image';
		}

		fputcsv($file,$header);
		
		$results = $this->model_extension_module_export->getAllProducts();
		
		foreach ($results as $result) {
			
			$export_data = array();

			if ($this->config->get('module_image_product_id_status')) {
				$export_data[]= $result['product_id'];
			}
			if ($this->config->get('module_product_additional_images_status')) {
				$export_data[]= $this->model_extension_module_export->getProductImage($result['product_id']);
			}
			fputcsv($file,$export_data);
		} 
		
		fclose($file);
		exit;
	}
}