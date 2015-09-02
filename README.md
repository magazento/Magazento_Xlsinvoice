<p>If you need additional data to appear on your invoices, or you need to adapt invoices to your business practices, then the templates are right for you. You can easily customize the contents of invoices to meet your business requirements.&nbsp;</p>
<p>Templates can be easily customized in Microsoft Excel 2003+ or OpenOffice. You can start with commented templates supplied with the module. For ease of work, a tuning template is available, which displays the source data. You can get an overview of usable data, even if you want to use your own added data.&nbsp;</p>
<p><strong>Demo:</strong></p>
<p>EXCEL creditmemo sample:&nbsp;<br /><a href="http://www.magazento.com/promo/xlsinvoice/creditmemo_2_1347625448.xls" target="_blank">creditmemo_2_1347625448.xls</a><br /> EXCEL&nbsp;invoice sample:&nbsp;<br /> <a href="http://www.magazento.com/promo/xlsinvoice/invoice_2_1347716319.xls" target="_blank">invoice_2_1347716319.xls</a><br /><a href="http://www.magazento.com/promo/xlsinvoice/invoice_atkart.xls" target="_blank">invoice_atkart.xls</a><br /> <a href="http://www.magazento.com/promo/xlsinvoice/invoice_kidzarella.xls" target="_blank">invoice_kidzarella.xls</a><br /> EXCEL&nbsp;shipment sample:&nbsp;<br /><a href="http://www.magazento.com/promo/xlsinvoice/shipment_2_1347625437.xls" target="_blank">shipment_2_1347625437.xls</a></p>
<p>Magento admin: <a href="http://demo2.ecommerceoffice.com/index.php/admin/" target="_blank">http://demo2.ecommerceoffice.com/admin/</a>&nbsp;[login:demo123 \ password:demo123]</p>
<p><strong><strong><strong><strong><strong><strong>XLS</strong>&nbsp;Invoice 1.1.3 new features!</strong></strong></strong></strong></strong></p>
<p>Decimal help fuction added - Format a number with grouped thousands.<span>&nbsp;<strong>{{xls.invoice.XXX.decimal.Y}}</strong></span></p>
<p><strong><em>Example:</em></strong><br /><span>{{xls.invoice.shipping_tax_amount}} will display 1002.01</span></p>
<p><span><span><strong><strong><strong><strong><strong></strong></strong>XLS</strong>&nbsp;Invoice 1.1.2 features!</strong></strong></span></span></p>
<p><em>Now you can add custom attributes for your Invoices,Shipments and Credit Memos. So your clients will see addtional information like county of origin or varrianty directly in document</em></p>
<p><img src="{{media url="wysiwyg/Screen_Shot_2013-05-21_at_3.03.57_PM_1.png"}}" alt="" /> <img src="{{media url="wysiwyg/Screen_Shot_2013-05-21_at_3.04.36_PM_2.png"}}" alt="" /> <strong>XLS Invoice 1.1.1 features:</strong></p>
<p><em>You can you following functions to format invoice and order varables</em><br />round {{pdf.invoice.XXX.round}}&nbsp;<br />day {{pdf.invoice.XXX.day}}&nbsp;<br />month {{pdf.invoice.XXX.month}}&nbsp;<br />year {{pdf.invoice.XXX.year}}&nbsp;<br />round {{pdf.order.XXX.round}}&nbsp;<br />day {{pdf.order.XXX.day}}&nbsp;<br />month {{pdf.order.XXX.month}}&nbsp;<br />year {{pdf.order.XXX.year}}&nbsp;<br /><br /><em>Example:</em><br />{{pdf.invoice.shipping_tax_amount}} will display 1002.01<br />{{pdf.invoice.shipping_tax_amount.round}} will display 1002</p>
<p><strong>General:</strong><br /> - Order data access through snippets,&nbsp;<a href="#order_snippets">go to snippets</a><br /> - Invoice data access through snippets,&nbsp;<a href="#invoice_snippets">go to invoice snippets</a><br /> - Ordered product data access through snippets,&nbsp;<a href="#item_snippets">go to product snippets</a><br /> - Billing data access through snippets,&nbsp;<a href="#billing_snippets">go to billing snippets</a><br /> - Shipping data access through snippets,&nbsp;<a href="#shipping_snippets">go to shipping snippets</a><br /> - Excel invoices, shipments, credit memos support<br />- Magento variables support<br /> - Magento static blocks\snippets support<br /> - Generate Exceldocuments compliant with Microsoft Excel XP,2003,2007,2010 and OpenOffice<br />- HTML, text, images support<br />- Full support for UTF-8<br />- Multilingual support &ndash; English, Portugu&ecirc;s, ไทย, Espa&ntilde;ol, Руcский, 한국어, Fran&ccedil;ais, Deutsch, 中文, العربية, etc..</p>
<p><strong>Compatibility:</strong><br />- Magento&trade; CE 1.3.x, 1.4.x, 1.5.x, 1.6.x, 1.7.x<br />- Magento&trade; EE 1.8.x, 1.9.x, 1.10.x, 1.11.x, 1.12.x<br />- No Magento&trade; patching required, no core files modifications</p>


<p><br /><strong>Installation:</strong><br />- Easy integration, no installation or setup is necessary on the server. All you have to do is upload your files</p>

<p id="invoice_snippets"><span style="font-size: medium; color: #ff6600;"><strong>Invoice snippets:</strong></span></p>
<ul>
<li>entity_id = {{pdf.invoice.entity_id}}</li>
<li>store_id = {{pdf.invoice.store_id}}</li>
<li>base_grand_total = {{pdf.invoice.base_grand_total}}</li>
<li>shipping_tax_amount = {{pdf.invoice.shipping_tax_amount}}</li>
<li>tax_amount = {{pdf.invoice.tax_amount}}</li>
<li>base_tax_amount = {{pdf.invoice.base_tax_amount}}</li>
<li>store_to_order_rate = {{pdf.invoice.store_to_order_rate}}</li>
<li>base_shipping_tax_amount = {{pdf.invoice.base_shipping_tax_amount}}</li>
<li>base_discount_amount = {{pdf.invoice.base_discount_amount}}</li>
<li>base_to_order_rate = {{pdf.invoice.base_to_order_rate}}</li>
<li>grand_total = {{pdf.invoice.grand_total}}</li>
<li>shipping_amount = {{pdf.invoice.shipping_amount}}</li>
<li>subtotal_incl_tax = {{pdf.invoice.subtotal_incl_tax}}</li>
<li>base_subtotal_incl_tax = {{pdf.invoice.base_subtotal_incl_tax}}</li>
<li>store_to_base_rate = {{pdf.invoice.store_to_base_rate}}</li>
<li>base_shipping_amount = {{pdf.invoice.base_shipping_amount}}</li>
<li>total_qty = {{pdf.invoice.total_qty}}</li>
<li>base_to_global_rate = {{pdf.invoice.base_to_global_rate}}</li>
<li>subtotal = {{pdf.invoice.subtotal}}</li>
<li>base_subtotal = {{pdf.invoice.base_subtotal}}</li>
<li>discount_amount = {{pdf.invoice.discount_amount}}</li>
<li>billing_address_id = {{pdf.invoice.billing_address_id}}</li>
<li>is_used_for_refund = {{pdf.invoice.is_used_for_refund}}</li>
<li>order_id = {{pdf.invoice.order_id}}</li>
<li>email_sent = {{pdf.invoice.email_sent}}</li>
<li>can_void_flag = {{pdf.invoice.can_void_flag}}</li>
<li>state = {{pdf.invoice.state}}</li>
<li>shipping_address_id = {{pdf.invoice.shipping_address_id}}</li>
<li>cybersource_token = {{pdf.invoice.cybersource_token}}</li>
<li>store_currency_code = {{pdf.invoice.store_currency_code}}</li>
<li>transaction_id = {{pdf.invoice.transaction_id}}</li>
<li>order_currency_code = {{pdf.invoice.order_currency_code}}</li>
<li>base_currency_code = {{pdf.invoice.base_currency_code}}</li>
<li>global_currency_code = {{pdf.invoice.global_currency_code}}</li>
<li>increment_id = {{pdf.invoice.increment_id}}</li>
<li>created_at = {{pdf.invoice.created_at}}</li>
<li>updated_at = {{pdf.invoice.updated_at}}</li>
<li>customer_id = {{pdf.invoice.customer_id}}</li>
<li>invoice_status_id = {{pdf.invoice.invoice_status_id}}</li>
<li>invoice_type = {{pdf.invoice.invoice_type}}</li>
<li>is_virtual = {{pdf.invoice.is_virtual}}</li>
<li>real_order_id = {{pdf.invoice.real_order_id}}</li>
<li>total_due = {{pdf.invoice.total_due}}</li>
<li>total_paid = {{pdf.invoice.total_paid}}</li>
<li>hidden_tax_amount = {{pdf.invoice.hidden_tax_amount}}</li>
<li>base_hidden_tax_amount = {{pdf.invoice.base_hidden_tax_amount}}</li>
<li>shipping_hidden_tax_amount = {{pdf.invoice.shipping_hidden_tax_amount}}</li>
<li>base_shipping_hidden_tax_amount = {{pdf.invoice.base_shipping_hidden_tax_amount}}</li>
<li>shipping_incl_tax = {{pdf.invoice.shipping_incl_tax}}</li>
<li>base_shipping_incl_tax = {{pdf.invoice.base_shipping_incl_tax}}</li>
<li>base_total_refunded = {{pdf.invoice.base_total_refunded}}</li>
</ul>
<p id="order_snippets"><span style="font-size: medium; color: #ff6600;"><strong>Order snippets:</strong></span></p>
<ul>
<li>entity_id = {{pdf.order.entity_id}}</li>
<li>state = {{pdf.order.state}}</li>
<li>status = {{pdf.order.status}}</li>
<li>coupon_code = {{pdf.order.coupon_code}}</li>
<li>protect_code = {{pdf.order.protect_code}}</li>
<li>shipping_description = {{pdf.order.shipping_description}}</li>
<li>is_virtual = {{pdf.order.is_virtual}}</li>
<li>store_id = {{pdf.order.store_id}}</li>
<li>customer_id = {{pdf.order.customer_id}}</li>
<li>base_discount_amount = {{pdf.order.base_discount_amount}}</li>
<li>base_discount_canceled = {{pdf.order.base_discount_canceled}}</li>
<li>base_discount_invoiced = {{pdf.order.base_discount_invoiced}}</li>
<li>base_discount_refunded = {{pdf.order.base_discount_refunded}}</li>
<li>base_grand_total= {{pdf.order.base_grand_total}}</li>
<li>base_shipping_amount = {{pdf.order.base_shipping_amount}}</li>
<li>base_shipping_canceled = {{pdf.order.base_shipping_canceled}}</li>
<li>base_shipping_invoiced = {{pdf.order.base_shipping_invoiced}}</li>
<li>base_shipping_refunded = {{pdf.order.base_shipping_refunded}}</li>
<li>base_shipping_tax_amount = {{pdf.order.base_shipping_tax_amount}}</li>
<li>base_shipping_tax_refunded = {{pdf.order.base_shipping_tax_refunded}}</li>
<li>base_subtotal = {{pdf.order.base_subtotal}}</li>
<li>base_subtotal_canceled = {{pdf.order.base_subtotal_canceled}}</li>
<li>base_subtotal_invoiced = {{pdf.order.base_subtotal_invoiced}}</li>
<li>base_subtotal_refunded = {{pdf.order.base_subtotal_refunded}}</li>
<li>base_tax_amount = {{pdf.order.base_tax_amount}}</li>
<li>base_tax_canceled = {{pdf.order.base_tax_canceled}}</li>
<li>base_tax_invoiced = {{pdf.order.base_tax_invoiced}}</li>
<li>base_tax_refunded = {{pdf.order.base_tax_refunded}}</li>
<li>base_to_global_rate = {{pdf.order.base_to_global_rate}}</li>
<li>base_to_order_rate = {{pdf.order.base_to_order_rate}}</li>
<li>base_total_canceled = {{pdf.order.base_total_canceled}}</li>
<li>base_total_invoiced = {{pdf.order.base_total_invoiced}}</li>
<li>base_total_invoiced_cost = {{pdf.order.base_total_invoiced_cost}}</li>
<li>base_total_offline_refunded = {{pdf.order.base_total_offline_refunded}}</li>
<li>base_total_online_refunded = {{pdf.order.base_total_online_refunded}}</li>
<li>base_total_paid = {{pdf.order.base_total_paid}}</li>
<li>base_total_qty_ordered = {{pdf.order.base_total_qty_ordered}}</li>
<li>base_total_refunded = {{pdf.order.base_total_refunded}}</li>
<li>discount_amount = {{pdf.order.discount_amount}}</li>
<li>discount_canceled = {{pdf.order.discount_canceled}}</li>
<li>discount_invoiced = {{pdf.order.discount_invoiced}}</li>
<li>discount_refunded = {{pdf.order.discount_refunded}}</li>
<li>grand_total = {{pdf.order.grand_total}}</li>
<li>shipping_amount = {{pdf.order.shipping_amount}}</li>
<li>shipping_canceled = {{pdf.order.shipping_canceled}}</li>
<li>shipping_invoiced = {{pdf.order.shipping_invoiced}}</li>
<li>shipping_refunded = {{pdf.order.shipping_refunded}}</li>
<li>shipping_tax_amount = {{pdf.order.shipping_tax_amount}}</li>
<li>shipping_tax_refunded = {{pdf.order.shipping_tax_refunded}}</li>
<li>store_to_base_rate = {{pdf.order.store_to_base_rate}}</li>
<li>store_to_order_rate = {{pdf.order.store_to_order_rate}}</li>
<li>subtotal = {{pdf.order.subtotal}}</li>
<li>subtotal_canceled = {{pdf.order.subtotal_canceled}}</li>
<li>subtotal_invoiced = {{pdf.order.subtotal_invoiced}}</li>
<li>subtotal_refunded = {{pdf.order.subtotal_refunded}}</li>
<li>tax_amount = {{pdf.order.tax_amount}}</li>
<li>tax_canceled = {{pdf.order.tax_canceled}}</li>
<li>tax_invoiced = {{pdf.order.tax_invoiced}}</li>
<li>tax_refunded = {{pdf.order.tax_refunded}}</li>
<li>total_canceled = {{pdf.order.total_canceled}}</li>
<li>total_invoiced = {{pdf.order.total_invoiced}}</li>
<li>total_offline_refunded = {{pdf.order.total_offline_refunded}}</li>
<li>total_online_refunded = {{pdf.order.total_online_refunded}}</li>
<li>total_paid = {{pdf.order.total_paid}}</li>
<li>total_qty_ordered = {{pdf.order.total_qty_ordered}}</li>
<li>total_refunded = {{pdf.order.total_refunded}}</li>
<li>can_ship_partially = {{pdf.order.can_ship_partially}}</li>
<li>can_ship_partially_item = {{pdf.order.can_ship_partially_item}}</li>
<li>customer_is_guest = {{pdf.order.customer_is_guest}}</li>
<li>customer_note_notify = {{pdf.order.customer_note_notify}}</li>
<li>billing_address_id = {{pdf.order.billing_address_id}}</li>
<li>customer_group_id = {{pdf.order.customer_group_id}}</li>
<li>edit_increment = {{pdf.order.edit_increment}}</li>
<li>email_sent = {{pdf.order.email_sent}}</li>
<li>forced_do_shipment_with_invoice = {{pdf.order.forced_do_shipment_with_invoice}}</li>
<li>gift_message_id = {{pdf.order.gift_message_id}}</li>
<li>payment_authorization_expiration = {{pdf.order.payment_authorization_expiration}}</li>
<li>paypal_ipn_customer_notified = {{pdf.order.paypal_ipn_customer_notified}}</li>
<li>quote_address_id = {{pdf.order.quote_address_id}}</li>
<li>quote_id = {{pdf.order.quote_id}}</li>
<li>shipping_address_id = {{pdf.order.shipping_address_id}}</li>
<li>adjustment_negative = {{pdf.order.adjustment_negative}}</li>
<li>adjustment_positive = {{pdf.order.adjustment_positive}}</li>
<li>base_adjustment_negative = {{pdf.order.base_adjustment_negative}}</li>
<li>base_adjustment_positive = {{pdf.order.base_adjustment_positive}}</li>
<li>base_shipping_discount_amount = {{pdf.order.base_shipping_discount_amount}}</li>
<li>base_subtotal_incl_tax = {{pdf.order.base_subtotal_incl_tax}}</li>
<li>base_total_due = {{pdf.order.base_total_due}}</li>
<li>payment_authorization_amount = {{pdf.order.payment_authorization_amount}}</li>
<li>shipping_discount_amount = {{pdf.order.shipping_discount_amount}}</li>
<li>subtotal_incl_tax = {{pdf.order.subtotal_incl_tax}}</li>
<li>total_due = {{pdf.order.total_due}}</li>
<li>weight = {{pdf.order.weight}}</li>
<li>customer_dob = {{pdf.order.customer_dob}}</li>
<li>increment_id = {{pdf.order.increment_id}}</li>
<li>applied_rule_ids = {{pdf.order.applied_rule_ids}}</li>
<li>base_currency_code = {{pdf.order.base_currency_code}}</li>
<li>customer_email = {{pdf.order.customer_email}}</li>
<li>customer_firstname = {{pdf.order.customer_firstname}}</li>
<li>customer_lastname = {{pdf.order.customer_lastname}}</li>
<li>customer_middlename = {{pdf.order.customer_middlename}}</li>
<li>customer_prefix = {{pdf.order.customer_prefix}}</li>
<li>customer_suffix = {{pdf.order.customer_suffix}}</li>
<li>customer_taxvat = {{pdf.order.customer_taxvat}}</li>
<li>discount_description = {{pdf.order.discount_description}}</li>
<li>ext_customer_id = {{pdf.order.ext_customer_id}}</li>
<li>ext_order_id = {{pdf.order.ext_order_id}}</li>
<li>global_currency_code = {{pdf.order.global_currency_code}}</li>
<li>hold_before_state = {{pdf.order.hold_before_state}}</li>
<li>hold_before_status = {{pdf.order.hold_before_status}}</li>
<li>order_currency_code = {{pdf.order.order_currency_code}}</li>
<li>original_increment_id = {{pdf.order.original_increment_id}}</li>
<li>relation_child_id = {{pdf.order.relation_child_id}}</li>
<li>relation_child_real_id = {{pdf.order.relation_child_real_id}}</li>
<li>relation_parent_id = {{pdf.order.relation_parent_id}}</li>
<li>relation_parent_real_id = {{pdf.order.relation_parent_real_id}}</li>
<li>remote_ip = {{pdf.order.remote_ip}}</li>
<li>shipping_method = {{pdf.order.shipping_method}}</li>
<li>store_currency_code = {{pdf.order.store_currency_code}}</li>
<li>store_name = {{pdf.order.store_name}}</li>
<li>x_forwarded_for = {{pdf.order.x_forwarded_for}}</li>
<li>customer_note = {{pdf.order.customer_note}}</li>
<li>created_at = {{pdf.order.created_at}}</li>
<li>updated_at = {{pdf.order.updated_at}}</li>
<li>total_item_count = {{pdf.order.total_item_count}}</li>
<li>customer_gender = {{pdf.order.customer_gender}}</li>
<li>base_custbalance_amount = {{pdf.order.base_custbalance_amount}}</li>
<li>currency_base_id = {{pdf.order.currency_base_id}}</li>
<li>currency_code = {{pdf.order.currency_code}}</li>
<li>currency_rate = {{pdf.order.currency_rate}}</li>
<li>custbalance_amount = {{pdf.order.custbalance_amount}}</li>
<li>is_hold = {{pdf.order.is_hold}}</li>
<li>is_multi_payment = {{pdf.order.is_multi_payment}}</li>
<li>real_order_id = {{pdf.order.real_order_id}}</li>
<li>tax_percent = {{pdf.order.tax_percent}}</li>
<li>tracking_numbers = {{pdf.order.tracking_numbers}}</li>
<li>hidden_tax_amount = {{pdf.order.hidden_tax_amount}}</li>
<li>base_hidden_tax_amount = {{pdf.order.base_hidden_tax_amount}}</li>
<li>shipping_hidden_tax_amount = {{pdf.order.shipping_hidden_tax_amount}}</li>
<li>base_shipping_hidden_tax_amount = {{pdf.order.base_shipping_hidden_tax_amount}}</li>
<li>hidden_tax_invoiced = {{pdf.order.hidden_tax_invoiced}}</li>
<li>base_hidden_tax_invoiced = {{pdf.order.base_hidden_tax_invoiced}}</li>
<li>hidden_tax_refunded = {{pdf.order.hidden_tax_refunded}}</li>
<li>base_hidden_tax_refunded ={{pdf.order.base_hidden_tax_refunded}}</li>
</ul>
<p id="item_snippets"><span style="font-size: medium; color: #ff6600;"><strong>Ordered items snippets:</strong></span></p>
<ul>
<li>{{xls.item.order_id}}</li>
<li>{{xls.item.parent_item_id}}</li>
<li>{{xls.item.quote_item_id}}</li>
<li>{{xls.item.store_id}}</li>
<li>{{xls.item.created_at}}</li>
<li>{{xls.item.updated_at}}</li>
<li>{{xls.item.product_id}}</li>
<li>{{xls.item.product_type}}</li>
<li>{{xls.item.product_options}}</li>
<li>{{xls.item.weight}}</li>
<li>{{xls.item.is_virtual}}</li>
<li>{{xls.item.sku}}</li>
<li>{{xls.item.name}}</li>
<li>{{xls.item.description}}</li>
<li>{{xls.item.applied_rule_ids}}</li>
<li>{{xls.item.additional_data}}</li>
<li>{{xls.item.free_shipping}}</li>
<li>{{xls.item.is_qty_decimal}}</li>
<li>{{xls.item.no_discount}}</li>
<li>{{xls.item.qty_backordered}}</li>
<li>{{xls.item.qty_canceled}}</li>
<li>{{xls.item.qty_invoiced}}</li>
<li>{{xls.item.qty_ordered}}</li>
<li>{{xls.item.qty_refunded}}</li>
<li>{{xls.item.qty_shipped}}</li>
<li>{{xls.item.base_cost}}</li>
<li>{{xls.item.price}}</li>
<li>{{xls.item.base_price}}</li>
<li>{{xls.item.original_price}}</li>
<li>{{xls.item.base_original_price}}</li>
<li>{{xls.item.tax_percent}}</li>
<li>{{xls.item.tax_amount}}</li>
<li>{{xls.item.base_tax_amount}}</li>
<li>{{xls.item.tax_invoiced}}</li>
<li>{{xls.item.base_tax_invoiced}}</li>
<li>{{xls.item.discount_percent}}</li>
<li>{{xls.item.discount_amount}}</li>
<li>{{xls.item.base_discount_amount}}</li>
<li>{{xls.item.discount_invoiced}}</li>
<li>{{xls.item.base_discount_invoiced}}</li>
<li>{{xls.item.amount_refunded}}</li>
<li>{{xls.item.base_amount_refunded}}</li>
<li>{{xls.item.row_total}}</li>
<li>{{xls.item.base_row_total}}</li>
<li>{{xls.item.row_invoiced}}</li>
<li>{{xls.item.base_row_invoiced}}</li>
<li>{{xls.item.row_weight}}</li>
<li>{{xls.item.gift_message_id}}</li>
<li>{{xls.item.gift_message_available}}</li>
<li>{{xls.item.base_tax_before_discount}}</li>
<li>{{xls.item.tax_before_discount}}</li>
<li>{{xls.item.weee_tax_applied}}</li>
<li>{{xls.item.weee_tax_applied_amount}}</li>
<li>{{xls.item.weee_tax_applied_row_amount}}</li>
<li>{{xls.item.base_weee_tax_applied_amount}}</li>
<li>{{xls.item.base_weee_tax_applied_row_amnt}}</li>
<li>{{xls.item.weee_tax_disposition}}</li>
<li>{{xls.item.weee_tax_row_disposition}}</li>
<li>{{xls.item.base_weee_tax_disposition}}</li>
<li>{{xls.item.base_weee_tax_row_disposition}}</li>
<li>{{xls.item.ext_order_item_id}}</li>
<li>{{xls.item.locked_do_invoice}}</li>
<li>{{xls.item.locked_do_ship}}</li>
<li>{{xls.item.price_incl_tax}}</li>
<li>{{xls.item.base_price_incl_tax}}</li>
<li>{{xls.item.row_total_incl_tax}}</li>
<li>{{xls.item.base_row_total_incl_tax}}</li>
<li>{{xls.item.hidden_tax_amount}}</li>
<li>{{xls.item.base_hidden_tax_amount}}</li>
<li>{{xls.item.hidden_tax_invoiced}}</li>
<li>{{xls.item.base_hidden_tax_invoiced}}</li>
<li>{{xls.item.hidden_tax_refunded}}</li>
<li>{{xls.item.base_hidden_tax_refunded}}</li>
<li>{{xls.item.is_nominal}}</li>
<li>{{xls.item.tax_canceled}}</li>
<li>{{xls.item.hidden_tax_canceled}}</li>
<li>{{xls.item.tax_refunded}}</li>
</ul>
<p id="billing_snippets"><span style="font-size: medium; color: #ff6600;"><strong>Billing snippets:</strong></span></p>
<ul>
<li>{{xls.billing.entity_id}}</li>
<li>{{xls.billing.parent_id}}</li>
<li>{{xls.billing.customer_address_id}}</li>
<li>{{xls.billing.quote_address_id}}</li>
<li>{{xls.billing.region_id}}</li>
<li>{{xls.billing.customer_id}}</li>
<li>{{xls.billing.fax}}</li>
<li>{{xls.billing.region}}</li>
<li>{{xls.billing.postcode}}</li>
<li>{{xls.billing.lastname}}</li>
<li>{{xls.billing.street}}</li>
<li>{{xls.billing.city}}</li>
<li>{{xls.billing.email}}</li>
<li>{{xls.billing.telephone}}</li>
<li>{{xls.billing.country_id}}</li>
<li>{{xls.billing.firstname}}</li>
<li>{{xls.billing.address_type}}</li>
<li>{{xls.billing.prefix}}</li>
<li>{{xls.billing.middlename}}</li>
<li>{{xls.billing.suffix}}</li>
<li>{{xls.billing.company}}</li>
<li>{{xls.billing.address_id}}</li>
<li>{{xls.billing.gift_message_id}}</li>
<li>{{xls.billing.tax_id}}</li>
</ul>
<p id="shipping_snippets"><span style="font-size: medium; color: #ff6600;"><strong>Shipping snippets:</strong></span></p>
<ul>
<li>{{xls.shipping.entity_id}}</li>
<li>{{xls.shipping.parent_id}}</li>
<li>{{xls.shipping.customer_address_id}}</li>
<li>{{xls.shipping.quote_address_id}}</li>
<li>{{xls.shipping.region_id}}</li>
<li>{{xls.shipping.customer_id}}</li>
<li>{{xls.shipping.fax}}</li>
<li>{{xls.shipping.region}}</li>
<li>{{xls.shipping.postcode}}</li>
<li>{{xls.shipping.lastname}}</li>
<li>{{xls.shipping.street}}</li>
<li>{{xls.shipping.city}}</li>
<li>{{xls.shipping.email}}</li>
<li>{{xls.shipping.telephone}}</li>
<li>{{xls.shipping.country_id}}</li>
<li>{{xls.shipping.firstname}}</li>
<li>{{xls.shipping.address_type}}</li>
<li>{{xls.shipping.prefix}}</li>
<li>{{xls.shipping.middlename}}</li>
<li>{{xls.shipping.suffix}}</li>
<li>{{xls.shipping.company}}</li>
<li>{{xls.shipping.address_id}}</li>
<li>{{xls.shipping.gift_message_id}}</li>
<li>{{xls.shipping.tax_id}}</li>
</ul>
<p><span style="font-size: medium; color: #ff6600;"><strong>How it looks:</strong></span></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-1.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-2.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-3.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-4.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-5.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-6.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-7.png" alt="" width="900" /></p>
<p><img src="http://magazento.com/promo/xlsinvoice/Screenshot-8.png" alt="" width="900" /></p>