<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb23ef5f094a111e564c7aa16cc4aea80
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jelix\\ComposerPlugin\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jelix\\ComposerPlugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/jelix/composer-module-setup/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Proj4php' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/proj4php.php',
        'Proj4phpCommon' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/proj4phpCommon.php',
        'Proj4phpProj' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/proj4phpProj.php',
        'Proj4phpProjAea' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/aea.php',
        'Proj4phpProjAeqd' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/aeqd.php',
        'Proj4phpProjCass' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/cass.php',
        'Proj4phpProjCea' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/cea.php',
        'Proj4phpProjEqc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/eqc.php',
        'Proj4phpProjEqdc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/eqdc.php',
        'Proj4phpProjEqui' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/equi.php',
        'Proj4phpProjGauss' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/gauss.php',
        'Proj4phpProjGnom' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/gnom.php',
        'Proj4phpProjGstmerc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/gstmerc.php',
        'Proj4phpProjKrovak' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/krovak.php',
        'Proj4phpProjLaea' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/laea.php',
        'Proj4phpProjLcc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/lcc.php',
        'Proj4phpProjMerc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/merc.php',
        'Proj4phpProjMill' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/mill.php',
        'Proj4phpProjMoll' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/moll.php',
        'Proj4phpProjNzmg' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/nzmg.php',
        'Proj4phpProjOmerc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/omerc.php',
        'Proj4phpProjOrtho' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/ortho.php',
        'Proj4phpProjPoly' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/poly.php',
        'Proj4phpProjSinu' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/sinu.php',
        'Proj4phpProjSomerc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/somerc.php',
        'Proj4phpProjStere' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/stere.php',
        'Proj4phpProjSterea' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/sterea.php',
        'Proj4phpProjTmerc' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/tmerc.php',
        'Proj4phpProjUtm' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/utm.php',
        'Proj4phpProjVandg' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/projCode/vandg.php',
        'proj4phpDatum' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/proj4phpDatum.php',
        'proj4phpLongLat' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/proj4phpLongLat.php',
        'proj4phpPoint' => __DIR__ . '/..' . '/proj4php/proj4php/src/proj4php/proj4phpPoint.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb23ef5f094a111e564c7aa16cc4aea80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb23ef5f094a111e564c7aa16cc4aea80::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb23ef5f094a111e564c7aa16cc4aea80::$classMap;

        }, null, ClassLoader::class);
    }
}
