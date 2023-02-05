<?php

declare(strict_types=1);

use Symplify\EasyCI\Config\EasyCIConfig;
use Symplify\PHPStanExtensions\TypeExtension\FuncCall\NativeFunctionDynamicFunctionReturnTypeExtension;
use Symplify\PHPStanExtensions\TypeExtension\MethodCall\ContainerGetReturnTypeExtension;
use Symplify\PHPStanExtensions\TypeExtension\MethodCall\SplFileInfoTolerantReturnTypeExtension;

return static function (EasyCIConfig $easyCIConfig): void {
    $easyCIConfig->typesToSkip([
        NativeFunctionDynamicFunctionReturnTypeExtension::class,
        ContainerGetReturnTypeExtension::class,
        SplFileInfoTolerantReturnTypeExtension::class,
    ]);
};
