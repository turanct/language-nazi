Language-Nazi
========================================

A simple PHP Text processing library


1. Goals & Accomplishments
----------------------------------------

### 1.1 Goals

- Enable developers to create a chain of processing steps that a given text should undergo
- Every step should be an atomic change to the given input text


2. Getting started
----------------------------------------

### 2.1 Requirements

- php 5.3


### 2.2 Installing

Just include this in your project using composer


### 2.3 Using

Create a chain class, which will create a chain of LanguageNazi's for you, which you can then reuse.

```php
<?php

use LanguageNazi\Grammar\FirstCharacterOfSentenceShouldBeUppercase;
use LanguageNazi\Formatting\Html\Underline;

class Chain
{
	protected $chain;

	public function __construct()
	{
		$this->chain = new FirstCharacterOfSentenceShouldBeUpperCase();
		$this->chain->nextNazi(new Underline())
			->nextNazi(new FormatPhoneNumbers());
	}

	public function process($text)
	{
		return $this->chain->process($text);
	}
}
```

You can then use that chain class to process your text.

```php
<?php

$chain = new Chain();

var_dump($chain->process('hello world'));
var_dump($chain->process('hello there LanguageNazi! glad to see you!'));
```



3. License
----------------------------------------

Gunpowder is licensed under the *MIT License*
