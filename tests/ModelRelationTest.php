<?php

namespace Konnco\Inadiv\Tests;

use Konnco\Inadiv\Models\City;
use Konnco\Inadiv\Models\District;
use Konnco\Inadiv\Models\Province;
use Konnco\Inadiv\Models\Subdistrict;

class ModelRelationTest extends TestCase
{
    /** @test */
    public function province_can_get_all_cities_properly()
    {
        $province = Province::first();
        $this->assertNotNull($province->cities);
    }

    /** @test */
    public function city_can_get_all_districts_properly()
    {
        $city = City::first();
        $this->assertNotNull($city->districts);
    }

    /** @test */
    public function city_can_get_origin_province_properly()
    {
        $city = City::first();
        $this->assertNotNull($city->province);
    }

    /** @test */
    public function district_can_get_all_subdistricts_properly()
    {
        $district = District::first();
        $this->assertNotNull($district->subdistricts);
    }

    /** @test */
    public function district_can_get_origin_city_properly()
    {
        $district = District::first();
        $this->assertNotNull($district->city);
    }

    /** @test */
    public function subdistrict_can_get_origin_distict_properly()
    {
        $subdistrict = Subdistrict::first();
        $this->assertNotNull($subdistrict->district);
    }
}
