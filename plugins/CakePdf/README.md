# CakePdf plugin

[![Build Status](https://travis-ci.org/FriendsOfCake/CakePdf.svg?branch=3.0)](https://travis-ci.org/FriendsOfCake/CakePdf)
[![License](https://poser.pugx.org/FriendsOfCake/CakePdf/license.png)](https://packagist.org/packages/FriendsOfCake/CakePdf)

Plugin containing CakePdf lib which will use a PDF engine to convert HTML to PDF.

Current engines:
* DomPdf
* Mpdf
* Tcpdf
* WkHtmlToPdf **RECOMMENDED ENGINE**


## Requirements

* PHP 5.4.16+
* CakePHP 3.0+
* One of the following render engines: DomPdf, Mpdf, Tcpdf or wkhtmltopdf
* pdftk (optional) See: http://www.pdflabs.com/tools/pdftk-the-pdf-toolkit/


## Installation

You can install this plugin into your CakePHP application using
[composer](http://getcomposer.org). For existing applications you can add the
following to your `composer.json` file:

```javascript
"require": {
    "friendsofcake/cakepdf": "3.0.x-dev"
}
```

And run `php composer.phar update`, or `composer update` (Depending on your composer setup)

CakePdf does not include any of the supported PDF engines, you need to install them yourself.
The recommend wkhtmltopdf engine can be downloaded from http://wkhtmltopdf.org/, by default CakePdf expects the
wkhtmltopdf binary to be located in /usr/bin/wkhtmltopdf.

DomPdf, Mpdf and Tcpdf can be installed via composer using on of the following commands:

```
composer require dompdf/dompdf
composer require tecnick.com/tcpdf
composer require mpdf/mpdf
```

## Setup

In `config/bootstrap.php` add:
```php
Plugin::load('CakePdf', array('bootstrap' => true, 'routes' => true));
```

## Configuration

Use `Configure::write('CakePdf', $config);` or set Controller property `$pdfConfig` (only when used with PdfView)
You need to define at least `$config['engine']`. When using CakePdf directly you can also pass the config array to constructor.
The value for engine should have the `Plugin.ClassName` format without the Engine suffix

Configuration options:
* engine: Engine to be used (required), or an array of engine config options
  * className: Engine class to use
  * binary: Binary file to use (Only for wkhtmltopdf)
  * options: Options to pass on to wkhtmltopdf
* crypto: Crypto engine to be used, or an array of crypto config options
  * className: Crypto class to use
  * binary: Binary file to use
* pageSize: Change the default size, defaults to A4
* orientation: Change the default orientation, defaults to potrait
* margin: Array or margins with the keys: bottom, left, right, top and their values
* title: Title of the document
* encoding: Change the encoding, defaults to UTF-8
* download: Set to true to force a download, only when using PdfView
* filename: Filename for the document when using forced download

Example:
```php
<?php
    Configure::write('CakePdf', [
        'engine' => 'CakePdf.WkHtmlToPdf',
        'margin' => [
            'bottom' => 15,
            'left' => 50,
            'right' => 30,
            'top' => 45
        ],
        'orientation' => 'landscape',
        'download' => true
    ]);
?>

<?php
    class InvoicesController extends AppController {
        //in your Invoices controller you could set additional configs, or override the global ones:
        public function view($id = null) {
            $invoice = $this->Invoice->get($id);
            $this->pdfConfig = array(
                'orientation' => 'portrait',
                'filename' => 'Invoice_' . $id
            );
            $this->set('invoice', $invoice);
        }
    }
?>
```

The `engine` and `crypto` config options can also be arrays with configuration options for the relevant class. For example,

```php
    Configure::write('CakePdf', [
        'engine' => [
            'className' => 'CakePdf.WkHtmlToPdf',
            // Mac OS X / Linux is usually like:
            'binary' => '/usr/local/bin/wkhtmltopdf',
            // On Windows environmnent you NEED to use the path like
            // old fashioned MS-DOS Paths, otherwise you will keep getting:
            // WKHTMLTOPDF didn't return any data
            // 'binary' => 'C:\\Progra~1\\wkhtmltopdf\\bin\\wkhtmltopdf.exe',
	        'options' => [
	            'print-media-type' => false,
	            'outline' => true,
	            'dpi' => 96
	        ],
        ],
    ]);
```

## Usage

You can use CakePdf in 2 ways, read carefully which one you actually need.
Many people mix both ways and don't get the expected results.


### 1: Render as PDF (including forced download) in the browser with PdfView

You can create PDF view and layout files for your controller actions and have them automatically rendered.
Place the view templates in a 'pdf' subdir, for instance `src/Template/Invoices/pdf/view.ctp`
Layouts will be in `src/Template/Layouts/pdf/default.ctp`

Make sure your InvoicesController has RequestHandler Component in the `$components` array.
Browse to http://localhost/invoices/view/1.pdf

Additionally you can map resources by adding `Router::mapResources(array('Invoices'));` to your routes
file and you can access the same document at http://localhost/invoices/1.pdf


### 2: Create PDF for email attachment, file storage etc.

You can use CakePdf lib to create raw PDF data with a view template.
The view file path would look like `src/Template/Pdf/newsletter.ctp`.
Layout file path would be like `src/Template/Layouts/pdf/default.ctp`
Note that layouts for both usage types are within same directory, but the view templates use different file paths
Optionally you can also write the raw data to file.

Example:
```php
<?php
    $CakePdf = new \CakePdf\Pdf\CakePdf();
    $CakePdf->template('newsletter', 'default');
    //get the pdf string returned
    $pdf = $CakePdf->output();
    //or write it to file directly
    $pdf = $CakePdf->write(APP . 'files' . DS . 'newsletter.pdf');
```


## Encryption

You can optionally encrypt the PDF with permissions

To use encryption you first need to select a crypto engine. Currently we support the following crypto engines:
* Pdftk


### Usage

Add the following in your bootstrap.

```php
Configure::write('CakePdf.crypto', 'CakePdf.Pdftk');
```

Options in pdfConfig:
* protect: Set to true to enable encryption
* userPassword (optional): Set a password to open the PDF file
* ownerPassword (optional): Set the password to unlock the locked permissions
* one of the above must be present, either userPassword or ownerPassword
* permissions (optional): Define the permissions

Permissions:

By default, we deny all permissions.

To allow all permissions:

Set 'permission' to true

To allow specific permissions:

Set 'permissions' to an array with a combination of the following available permissions:
* print
* degraded_print
* modify,
* assembly,
* copy_contents,
* screen_readers,
* annotate,
* fill_in


## Note about static assets

Use absolute URLs for static assets in your view templates for PDFs.
If you use `HtmlHelper::image()`, `HtmlHelper::script()` or `HtmlHelper::css()` make sure you have `$options['fullBase'] = true`

Another solution would be to create a `AppHelper` of which it would force `$options['fullBase'] = true` for PDF requests. e.g:
```php
class AppHelper extends Helper {
    public function assetUrl($path, $options = array()) {
    	if (!empty($this->request->params['ext']) && $this->request->params['ext'] === 'pdf') {
			$options['fullBase'] = true;
		}
		return parent::assetUrl($path, $options);
	}
}
```


## Thanks

Many thanks to Kim Biesbjerg and Jelle Henkens for their contributions.
Want your name here as well? Create a pull request for improvements/other PDF engines.
