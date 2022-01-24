# Laravel Notes Relations

### Navigation
- [Home](httpsgithub.comSjoerd-69laravel-cheatsheetblobmainREADME.md)
- [Installation  Basics](httpsgithub.comSjoerd-69laravel-cheatsheetblobmainINSTALLATION.md)
- [Controller](httpsgithub.comSjoerd-69laravel-cheatsheetblobmainCONTROLLER.md)
- [Model](httpsgithub.comSjoerd-69laravel-cheatsheetblobmainMODEL.md)
- Relations

### Relations in an migration
```php
$table-unsignedBigInteger('example_id');
$table-foreign('example_id')-references('id')-on('example');
```