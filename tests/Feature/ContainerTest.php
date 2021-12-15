<?php

namespace Tests\Feature;

use App\Container;
use App\Newsletter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContainerTest extends TestCase
{
//    /** @test */
//    function its_a_toy_chest()
//    {
//        $container = [
//            'foo' => 'bar'
//        ];

//        var_dump($container['foo']);
//    }

//    /** @test */
//    function its_a_toy_chest()
//    {
//        $container = [
//            'foo' => function() {
//                return 'bar';
//            }
//        ];

//        var_dump($container['foo']());
//    }

    /** @test */
   function LEVEL_ONE_it_can_bind_keys_to_values()
   {
       $container = new Container();

       $container->bind('foo', 'bar');

       $this->assertEquals('bar', $container->get('foo'));
   }

   /** @test */
   function LEVEL_TWO_it_can_lazily_resolve_functions()
   {
        $container = new Container();

        // $container->bind('newsletter', function() {
        //     return new Newsletter(uniqid());
        // });
        

        $container->singleton('newsletter', function() {
            return new Newsletter(uniqid());
        });

        // var_dump($container->get('newsletter'));
        // var_dump($container->get('newsletter'));
        // var_dump($container->get('newsletter'));

        $this->assertInstanceOf(Newsletter::class, $container->get('newsletter'));
   }

   /** @test */
   function LEVEL_THREE_it_can_do_magic()
   {
       $container = new Container();
   }
}
