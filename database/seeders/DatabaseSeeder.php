<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
        $this->call(ArtikelTagTableSeeder::class);
        $this->call(ArtikelKategoriTableSeeder::class);
        $this->call(ArtikelTagItemTableSeeder::class);
        $this->call(ArtikelKategoriItemTableSeeder::class);
        $this->call(GaleriTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(GFormsTableSeeder::class);
        $this->call(PRolesTableSeeder::class);
        $this->call(PPermissionsTableSeeder::class);
        $this->call(PMenuTableSeeder::class);
        $this->call(PModelHasPermissionsTableSeeder::class);
        $this->call(PModelHasRolesTableSeeder::class);
        $this->call(PRoleHasPermissionsTableSeeder::class);
        $this->call(PRoleHasMenuTableSeeder::class);
        $this->call(PMenuFrontendsTableSeeder::class);
        $this->call(NotifAdminAtasTableSeeder::class);
        $this->call(NotifDepanAtasTableSeeder::class);
        $this->call(HariBesarNasionalsTableSeeder::class);
        $this->call(ContactListTableSeeder::class);
        $this->call(ContactMessagesTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(HomeSlidersTableSeeder::class);
        $this->call(VisitorsTableSeeder::class);
        $this->call(ProdukKategoriTableSeeder::class);
        $this->call(ProdukTableSeeder::class);
        $this->call(ProdukMarketPlaceJenisTableSeeder::class);
        $this->call(ProdukFotoTableSeeder::class);
        $this->call(ProdukMarketPlaceTableSeeder::class);
        $this->call(HomeProgramPembelajaranTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(PendaftaransTableSeeder::class);
        $this->call(HomeKataKatasTableSeeder::class);
        $this->call(HomePengurusTableSeeder::class);
    }
}
