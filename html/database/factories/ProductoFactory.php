<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $productos = array (
        array(
           'producto' => 'Té Dharamsala',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Cerveza tibetana Barley',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Sirope de regaliz',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Especias Cajun del chef Anton',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Mezcla Gumbo del chef Anton',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Mermelada de grosellas de la abuela',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Peras secas orgánicas del tío Bob',
           'rubro' => 'Frutas/Verduras',
        ),
        array(
           'producto' => 'Salsa de arándanos Northwoods',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Buey Mishi Kobe',
           'rubro' => 'Carnes',
        ),
        array(
           'producto' => 'Pez espada',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Queso Cabrales',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Queso Manchego La Pastora',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Algas Konbu',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Cuajada de judías',
           'rubro' => 'Frutas/Verduras',
        ),
        array(
           'producto' => 'Salsa de soja baja en sodio',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Postre de merengue Pavlova',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Cordero Alice Springs',
           'rubro' => 'Carnes',
        ),
        array(
           'producto' => 'Langostinos tigre Carnarvon',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Pastas de té de chocolate',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Mermelada de Sir Rodney\'s',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Bollos de Sir Rodney\'s',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Pan de centeno crujiente estilo Gustaf\'s',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Pan fino',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Refresco Guaraná Fantástica',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Crema de chocolate y nueces NuNuCa',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Ositos de goma Gumbär',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Chocolate Schoggi',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Col fermentada Rössle',
           'rubro' => 'Frutas/Verduras',
        ),
        array(
           'producto' => 'Salchicha Thüringer',
           'rubro' => 'Carnes',
        ),
        array(
           'producto' => 'Arenque blanco del noroeste',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Queso gorgonzola Telino',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Queso Mascarpone Fabioli',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Queso de cabra',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Cerveza Sasquatch',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Cerveza negra Steeleye',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Escabeche de arenque',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Salmón ahumado Gravad',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Vino Côte de Blaye',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Licor verde Chartreuse',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Carne de cangrejo de Boston',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Crema de almejas estilo Nueva Inglaterra',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Tallarines de Singapur',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Café de Malasia',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Azúcar negra Malacca',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Arenque ahumado',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Arenque salado',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Galletas Zaanse',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Chocolate holandés',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Regaliz',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Chocolate blanco',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Manzanas secas Manjimup',
           'rubro' => 'Frutas/Verduras',
        ),
        array(
           'producto' => 'Cereales para Filo',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Empanada de carne',
           'rubro' => 'Carnes',
        ),
        array(
           'producto' => 'Empanada de cerdo',
           'rubro' => 'Carnes',
        ),
        array(
           'producto' => 'Paté chino',
           'rubro' => 'Carnes',
        ),
        array(
           'producto' => 'Gnocchi de la abuela Alicia',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Raviolis Angelo',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Caracoles de Borgoña',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Raclet de queso Courdavault',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Camembert Pierrot',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Sirope de arce',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Tarta de azúcar',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Sandwich de vegetales',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Bollos de pan de Wimmer',
           'rubro' => 'Granos/Cereales',
        ),
        array(
           'producto' => 'Salsa de pimiento picante de Luisiana',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Especias picantes de Luisiana',
           'rubro' => 'Condimentos',
        ),
        array(
           'producto' => 'Cerveza Laughing Lumberjack',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Barras de pan de Escocia',
           'rubro' => 'Repostería',
        ),
        array(
           'producto' => 'Queso Gudbrandsdals',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Cerveza Outback',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Crema de queso Fløtemys',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Queso Mozzarella Giovanni',
           'rubro' => 'Lácteos',
        ),
        array(
           'producto' => 'Caviar rojo',
           'rubro' => 'Pescado/Marisco',
        ),
        array(
           'producto' => 'Queso de soja Longlife',
           'rubro' => 'Frutas/Verduras',
        ),
        array(
           'producto' => 'Cerveza Klosterbier Rhönbräu',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Licor Cloudberry',
           'rubro' => 'Bebidas',
        ),
        array(
           'producto' => 'Salsa verde original Frankfurter',
           'rubro' => 'Condimentos',
        ),
    );
    
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $i = $faker->unique(true)->numberBetween(0, 76);
        return [
            'nombre' => $this->productos[$i]['producto'],
            'sku' => $this->faker->unique()->ean13(),
            'rubro' => $this->productos[$i]['rubro'],
            'stock' => $faker->randomNumber(3),
            'precio' => $faker->randomNumber(3),
        ];
    }
}
