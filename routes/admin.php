<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){

    
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('organisasi_kepemudaan', 'OrganisasiKepemudaanController')->names([
        'index' => 'organisasi_kepemudaan',
        'create' => 'organisasi_kepemudaan.create',
        'store' => 'organisasi_kepemudaan.store',
        'show' => 'organisasi_kepemudaan.show',
        'edit' => 'organisasi_kepemudaan.edit',
        'update' => 'organisasi_kepemudaan.update',
        'destroy' => 'organisasi_kepemudaan.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('aktor', 'AktorController')->names([
            'index' => 'aktor',
            'create' => 'aktor.create',
            'store' => 'aktor.store',
            'show' => 'aktor.show',
            'edit' => 'aktor.edit',
            'update' => 'aktor.update',
            'destroy' => 'aktor.destroy'
        ]);
    });

    Route::group(['middleware' => ['role:admin|disporapar']], function () {

        Route::get('/peminjaman_sarana/terima/{id}', 'VerifikasiPeminjamanController@terima');
        Route::get('/peminjaman_sarana/tolak/{id}', 'VerifikasiPeminjamanController@tolak');

        Route::resource('program_kerja', 'ProgramKerjaController')->names([
            'index' => 'program_kerja',
            'create' => 'program_kerja.create',
            'store' => 'program_kerja.store',
            'show' => 'program_kerja.show',
            'edit' => 'program_kerja.edit',
            'update' => 'program_kerja.update',
            'destroy' => 'program_kerja.destroy'
        ]);
    
        Route::resource('sarana_prasarana', 'SaranaPrasaranaController')->names([
            'index' => 'sarana_prasarana',
            'create' => 'sarana_prasarana.create',
            'store' => 'sarana_prasarana.store',
            'show' => 'sarana_prasarana.show',
            'edit' => 'sarana_prasarana.edit',
            'update' => 'sarana_prasarana.update',
            'destroy' => 'sarana_prasarana.destroy'
        ]);
    
        
        Route::resource('kelurahan', 'KelurahanController')->names([
            'index' => 'kelurahan',
            'create' => 'kelurahan.create',
            'store' => 'kelurahan.store',
            'show' => 'kelurahan.show',
            'edit' => 'kelurahan.edit',
            'update' => 'kelurahan.update',
            'destroy' => 'kelurahan.destroy'
        ]);
    
        
        Route::resource('kecamatan', 'KecamatanController')->names([
            'index' => 'kecamatan',
            'create' => 'kecamatan.create',
            'store' => 'kecamatan.store',
            'show' => 'kecamatan.show',
            'edit' => 'kecamatan.edit',
            'update' => 'kecamatan.update',
            'destroy' => 'kecamatan.destroy'
        ]);
    
        Route::resource('kegiatan_disporapar', 'KegiatanDisporaparController')->names([
            'index' => 'kegiatan_disporapar',
            'create' => 'kegiatan_disporapar.create',
            'store' => 'kegiatan_disporapar.store',
            'show' => 'kegiatan_disporapar.show',
            'edit' => 'kegiatan_disporapar.edit',
            'update' => 'kegiatan_disporapar.update',
            'destroy' => 'kegiatan_disporapar.destroy'
        ]);
    
        Route::resource('peminjaman_sarana', 'PeminjamanSaranaController')->names([
            'index' => 'peminjaman_sarana',
            'create' => 'peminjaman_sarana.create',
            'store' => 'peminjaman_sarana.store',
            'show' => 'peminjaman_sarana.show',
            'edit' => 'peminjaman_sarana.edit',
            'update' => 'peminjaman_sarana.update',
            'destroy' => 'peminjaman_sarana.destroy'
        ]);
    
        
    
        
        Route::resource('kelurahan.program', 'ProgramKelurahanController')->names([
            'index' => 'kelurahan_program',
            'create' => 'kelurahan_program.create',
            'store' => 'kelurahan_program.store',
            'show' => 'kelurahan_program.show',
            'edit' => 'kelurahan_program.edit',
            'update' => 'kelurahan_program.update',
            'destroy' => 'kelurahan_program.destroy'
        ]);
    
        Route::resource('kelurahan.sarana', 'SaranaKelurahanController')->names([
            'index' => 'kelurahan_sarana',
            'create' => 'kelurahan_sarana.create',
            'store' => 'kelurahan_sarana.store',
            'show' => 'kelurahan_sarana.show',
            'edit' => 'kelurahan_sarana.edit',
            'update' => 'kelurahan_sarana.update',
            'destroy' => 'kelurahan_sarana.destroy'
        ]);
    
        Route::resource('kecamatan.program', 'ProgramKecamatanController')->names([
            'index' => 'kecamatan_program',
            'create' => 'kecamatan_program.create',
            'store' => 'kecamatan_program.store',
            'show' => 'kecamatan_program.show',
            'edit' => 'kecamatan_program.edit',
            'update' => 'kecamatan_program.update',
            'destroy' => 'kecamatan_program.destroy'
        ]);
    
        Route::resource('kecamatan.sarana', 'SaranaKecamatanController')->names([
            'index' => 'kecamatan_sarana',
            'create' => 'kecamatan_sarana.create',
            'store' => 'kecamatan_sarana.store',
            'show' => 'kecamatan_sarana.show',
            'edit' => 'kecamatan_sarana.edit',
            'update' => 'kecamatan_sarana.update',
            'destroy' => 'kecamatan_sarana.destroy'
        ]);
    
        Route::resource('kecamatan.kelurahan', 'KelurahanKecamatanController')->names([
            'index' => 'kecamatan_kelurahan',
            'create' => 'kecamatan_kelurahan.create',
            'store' => 'kecamatan_kelurahan.store',
            'show' => 'kecamatan_kelurahan.show',
            'edit' => 'kecamatan_kelurahan.edit',
            'update' => 'kecamatan_kelurahan.update',
            'destroy' => 'kecamatan_kelurahan.destroy'
        ]);

        Route::resource('unduh_excel', 'PeminjamanSaranaExcelController')->names([
            'index' => 'unduh_excel'
        ]);

        Route::resource('kirim_email', 'EmailController')->names([
            'edit' => 'kirim_email.edit',
            'update' => 'kirim_email.update'
        ]);
    });

    
});
?>