# Magento 2
Oschadpay payment module for magento 2.X

Manual install
=======

1. Download the Payment Module archive, unpack it and upload its contents to a new folder <root>/app/code/Oschadpay/Oschadpay/ of your Magento 2 installation

2. Enable Payment Module

	```bash
	$ php bin/magento module:enable Oschadpay_Oschadpay --clear-static-content
	$ php bin/magento setup:upgrade
	 ```
3. Deploy Magento Static Content (Execute If needed)

	```bash
	$ php bin/magento setup:static-content:deploy
	```
Installation via Composer
=======

1. Go to Magento2 root folder

2. Enter following commands to install module:

    ```bash
    composer config repositories.cloudipsp git https://github.com/cloudipsp/magento2.git
    composer require cloudipsp/magento2:dev-master
    ```
   Wait while dependencies are updated.

3. Enter following commands to enable module:

    ```bash
    php bin/magento module:enable Oschadpay_Oschadpay --clear-static-content
    php bin/magento setup:upgrade
    ```
4. Enable and configure Oschadpay in Magento Admin under Stores/Configuration/Payment Methods/Oschadpay

!Note: If it needed 
	```bash
    php bin/magento setup:static-content:deploy
    ```

Enable and configure Oschadpay plugin in Magento Admin under `Stores / Configuration / Sales / Payment Methods / Oschadpay`.
