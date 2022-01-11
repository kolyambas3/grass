<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grasses')->insert([
            [
                'name' => 'Аира корневища',
                'properties' => 'Во время выздоровления, после операций, при нарушениях пищеварения, а также в период сильных нагрузок и стресса советуют принимать настой из корневищ аира. Лекарственная горечь из этого растения – акорин, в сочетании с дубильными веществами и смолами, усиливает секрецию желудочного сока. Это происходит за счет стимуляции вкусовых рецепторов языка и слизистых оболочек - непосредственно во рту. Благодаря этому воздействию у истощенного после болезни человека повышается аппетит, улучшается пищеварение, что способствует более эффективному восстановлению сил и здоровья.'
            ],
            [
                'name' => 'Алтея корни',
                'properties' => 'Настой из корней алтея часто назначают от кашля при болезнях дыхательной системы. Особенность этого лекарственного растения в том, что его активные вещества не только оказывают отхаркивающее действие, но и обладают обволакивающими и противовоспалительными свойствами. Сочетание рефлекторного отхаркивающего действия и разжижающего эффекта (снижение вязкости бронхиального секрета) помогает облегчить откашливание на фоне бронхита, бронхопневмонии, трахеита и других респираторных заболеваний.'
            ],
            [
                'name' => 'Багульника болотного побеги',
                'properties' => 'Для лечения кашля с трудноотделяемой мокротой принимают настой багульника. Это лекарственное растение, богатое противовоспалительными и антибактериальными компонентами, помогает выводить из дыхательных путей загустевшую слизь, и одновременно бороться с причиной заболевания – инфекцией и воспалением. Настой багульника показан к применению при бронхитах, ларинготрахеитах, бронхопневмонии. Благодаря высокому содержанию эфирного масла это лекарственное растение имеет ярко-зеленый цвет и приятный терпкий запах. Поэтому одно из народных названий багульника – лесной розмарин.'
            ],
            [
                'name' => 'Валерианы корневища с корнями',
                'properties' => 'Валериана – одно из самых известных в медицине успокоительных средств. Настой из ее корневищ с корнями советуют принимать при нервном напряжении, бессоннице, сосудистых спазмах и мигренях. В этом растении содержится около 100 расслабляющих индивидуальных веществ и ценных микроэлементов, а также эфирное масло. Возможности валерианы не ограничиваются седативными. Ее используют при спазмах желудка и кишечника, повышенной нервной возбудимости, нарушениях сна, функциональных расстройствах сердечно-сосудистой системы. Само это слово происходит от латинского «valere» – «быть здоровым».'
            ],
            [
                'name' => 'Крушины кора',
                'properties' => 'Кора крушины – это хорошо известное слабительное средство, которое воздействует на кишечник рефлекторно. Необходимый эффект вызывают содержащиеся в этом лекарственном растении вещества - антрагликозиды: они оказывают раздражающее действие на рецепторы слизистой оболочки толстой кишки, что в свою очередь запускаем механизм ее опорожнение. Кору крушины используют для симптоматического лечения запоров различного происхождения в виде настоя. Его пьют, как правило, на ночь с учетом того, что действие лекарства должно наступить примерно через 8-12 часов.'
            ],
            [
                'name' => 'Можжевельника плоды',
                'properties' => 'Благодаря тройному действию – мочегонному, противовоспалительному и антибактериальному – плоды можжевельника назначают при отечном синдроме, вызванном различными заболеваниями, в том числе инфекционными. Настой можжевельника пьют при «сердечных» отеках, нарушениях работы печени, почечной недостаточности. Особенно показаны плоды можжевельника при цистите: приготовленное из них лекарственное средство способно одновременно воздействовать и на бактерии, и на воспаление, при этом активно промывая мочевой пузырь для более эффективного устранения инфекции из организма.'
            ]
        ]);
    }
}