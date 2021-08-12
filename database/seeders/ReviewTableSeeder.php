<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create(
			[
				'parent_id' => '0',
				'comment' => 'Lorem0 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);
        Review::create(
			[
				'parent_id' => '0',
				'comment' => 'Lorem1 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '0',
				'comment' => 'Lorem2 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '0',
				'comment' => 'Lorem3 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '1',
				'comment' => 'Lorem4 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '1',
				'comment' => 'Lorem5 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '2',
				'comment' => 'Lorem6 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '2',
				'comment' => 'Lorem7 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '3',
				'comment' => 'Lorem8 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '3',
				'comment' => 'Lorem9 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '5',
				'comment' => 'Lorem10 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '5',
				'comment' => 'Lorem11 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '5',
				'comment' => 'Lorem12 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '6',
				'comment' => 'Lorem13 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '6',
				'comment' => 'Lorem14 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '6',
				'comment' => 'Lorem15 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '7',
				'comment' => 'Lorem16 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '7',
				'comment' => 'Lorem17 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);    
        Review::create(
			[
				'parent_id' => '7',
				'comment' => 'Lorem18 ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem leo, imperdiet ac dolor nec, dapibus iaculis odio. Vivamus vulputate enim magna, ut cursus mi semper quis.'
            ]);  
    }
}
