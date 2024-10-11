<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_id = Category::pluck('id')->all();

        for ($i=0; $i < 20; $i++) { 
            Post::query()->create([
                'title'=> 'Title '.$i,
                'content'=> 'Trình bày Tờ trình của Chính phủ, Thứ trưởng Bộ Y tế Trần Văn Thuấn cho biết, sau 15 năm triển khai thi hành, Luật BHYT đã thực sự đi vào cuộc sống với 93,3 triệu người tương ứng 93,35% dân số tham gia, khẳng định tính đúng đắn, tính phù hợp của chính sách BHYT theo nguyên tắc chia sẻ rủi ro, là cơ chế bảo đảm nguồn tài chính cho nhu cầu khám bệnh, chữa bệnh của nhân dân, bảo đảm an sinh xã hội và hội nhập quốc tế.
                            Tuy nhiên, trong quá trình thực hiện đã phát sinh những vướng mắc, bất cập, hạn chế cần được điều chỉnh đã được nêu rõ trong Báo cáo tổng kết 15 năm thực hiện Luật về các nội dung: đối tượng tham gia BHYT; phạm vi được hưởng của người tham gia BHYT; đa dạng hóa các gói BHYT và quy định liên kết với BHYT thương mại; đăng ký khám bệnh, chữa bệnh ban đầu, thông tuyến, chuyển tuyến; hợp đồng khám, chữa bệnh BHYT; giám định BHYT; quản lý, sử dụng quỹ BHYT… '.$i,
                'category_id'=>fake()->randomElement($category_id)

            ]);
        }
    }
}
