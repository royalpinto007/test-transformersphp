# Changelog

All notable changes to `transformers-php` will be documented in this file.

## v0.4.1 - 2024-05-24

### What's Changed

* configuration.md: fix indentation of Transformers::setup() by @k00ni in https://github.com/CodeWithKyrian/transformers-php/pull/35
* PretrainedTokenizer::truncateHelper: prevent array_slice() error for flawed text input (summarization) by @k00ni in https://github.com/CodeWithKyrian/transformers-php/pull/36
* Fix bug with Download CLI - use named parameters for model construct by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/39

### New Contributors

* @k00ni made their first contribution in https://github.com/CodeWithKyrian/transformers-php/pull/35

**Full Changelog**: https://github.com/CodeWithKyrian/transformers-php/compare/0.4.0...0.4.1

## v0.3.1 - 2024-04-22

### What's Changed

* Add Qwen2 model support by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/20
* Add chat input detection for text generation, and refactor streamer API. by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/21
* bugfix: Fix error that occurs when streamer is not used by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/22
* bugfix: Decoder sequence not calling the right method by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/23

**Full Changelog**: https://github.com/CodeWithKyrian/transformers-php/compare/0.3.0...0.3.1

## v0.3.0 - 2024-04-13

### What's Changed

* Add Image Classification pipelines support by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/9
* Add Zero shot Image Classification pipelines support by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/9
* Add New Image Driver - VIPS by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/10
* Add Object Detection Pipeline by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/11
* Download ONNXRuntime automatically after composer install by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/12
* Add Zero Shot Object Detection Pipeline and OwlVit models by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/14
* Improve tensor performance by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/13
* Set [MASK] usage in prompts for default Xenova/bert-base-uncased model by @takielias in https://github.com/CodeWithKyrian/transformers-php/pull/15
* Add image feature extraction pipeline by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/16
* Add image to image pipeline by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/17
* bugfix: https slashes affected when joining paths by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/19

### Breaking Changes

* The install command no longer exists, as the required libraries are downloaded automatically on composer install.
* New Image driver configuration settings added that required either GD, Imagick or Vips

### New Contributors

* @takielias made their first contribution in https://github.com/CodeWithKyrian/transformers-php/pull/15

**Full Changelog**: https://github.com/CodeWithKyrian/transformers-php/compare/0.2.2...0.3.0

## v0.2.2 - 2024-03-25

### What's new

- bugfix: Fix the wrong argument being passed in Autotokenizer by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/commit/05e55888d9ad0184103061347a427b259afb360e
- feat: cache tokenizer output to improve speed in repetitive tasks leading to 75% speed improvement (11.7687s to 2.9687s) by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/commit/b115c28f526dfbde13457c00f5306d05a51c445b

**Full Changelog**: https://github.com/CodeWithKyrian/transformers-php/compare/0.2.1...0.2.2

## v0.2.1 - 2024-03-22

## What's Changed

* bugfix: Add symfony/console explicitly as a dependency by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/7
* bugfix: Autoload errors for `WordPieceTokenizer` on case-sensitive operating systems in https://github.com/CodeWithKyrian/transformers-php/commit/0f1fc8bda91fb3df9492057a4224b171d2e3f2d5

**Full Changelog**: https://github.com/CodeWithKyrian/transformers-php/compare/0.2.0...0.2.1

## v0.2.0 - 2024-03-21

### What's Changed

* feat: Add ability to use chat templates in Text Generation by @CodeWithKyrian in https://github.com/CodeWithKyrian/transformers-php/pull/1
* bugfix: Autoload errors for `PretrainedModel` on case-sensitive operating systems by @CodeWithKyrian  in https://github.com/CodeWithKyrian/transformers-php/pull/4
* feat: Bump OnnxRuntime PHP to 0.2.0 in https://github.com/CodeWithKyrian/transformers-php/commit/b3331623cf6696aacbbad0f8c33530086404424d
* feat: Improve download and install command interfaces to show progress bar in https://github.com/CodeWithKyrian/transformers-php/commit/b3331623cf6696aacbbad0f8c33530086404424d

**Full Changelog**: https://github.com/CodeWithKyrian/transformers-php/compare/0.1.0...0.2.0

## v0.1.0 - 2024-03-15

### Initial Release 🎉

We are thrilled to announce the launch of Transformers PHP, a groundbreaking library that brings the power of state-of-the-art machine learning to the PHP community. Inspired by the HuggingFace Transformers and Xenova Transformers.js, Transformers PHP aims to provide an easy-to-use, high-performance toolset for developers looking to integrate advanced NLP, and in future updates potentially more, capabilities into their PHP applications.

#### Key Features:

- **Seamless Integration:** Designed to be functionally equivalent to its Python counterpart, making the transition and usage straightforward for developers familiar with the original Transformers library.
- **Performance Optimized:** Utilizes ONNX Runtime for efficient model inference, ensuring high performance even in demanding scenarios.
- **Comprehensive Model Support:** Access to thousands of pre-trained models across 100+ languages, covering a wide range of tasks including text generation, summarization, translation, sentiment analysis, and more.
- **Easy Model Conversion:** With 🤗 Optimum, easily convert PyTorch or TensorFlow models to ONNX format for use with Transformers PHP.
- **Developer Friendly:** From installation to deployment, every aspect of Transformers PHP is designed with ease of use in mind, featuring extensive documentation and a streamlined API.

#### Getting Started:

Installation is a breeze with Composer:

```bash
composer require codewithkyrian/transformers







```
And you must initialize the library to download neccesary libraries for ONNX

```bash
./vendor/bin/transformers install







```
#### Checkout the Documentation

For a comprehensive guide on how to use Transformers PHP, including detailed examples and configuration options, visit our [documentation](https://codewithkyrian.github.io/transformers-docs/docs).

#### Pre-Download Models:

To ensure a smooth user experience, especially with larger models, we recommend pre-downloading models before deployment. Transformers PHP includes a handy CLI tool for this purpose:

```bash
./vendor/bin/transformers download <model_identifier>







```
#### What's Next?

This initial release lays the groundwork for a versatile machine learning toolkit within the PHP ecosystem. We are committed to continuous improvement and expansion of Transformers PHP, with future updates aimed at increasing supported tasks, enhancing functionality, and broadening the scope of models.

#### Get Involved!

We encourage feedback, contributions, and discussions from the community. Whether you're reporting bugs, requesting features, or contributing code, your input is invaluable in making Transformers PHP better for everyone.

#### Acknowledgments:

A huge thank you to Hugging Face for their incredible work on the Transformers library, to Xenova for inspiring this package,  and to the broader machine learning community for their ongoing research and contributions. Transformers PHP stands on the shoulders of giants, and we are excited to see how it will empower PHP developers to push the boundaries of what's possible.
