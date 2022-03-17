<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('tools')->insert([
            'category_id' => 1,
            'name' => 'Clinic Evangelism Everyday',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        //2
        DB::table('tools')->insert([
            'category_id' => 1,
            'name' => 'Shared Your Faith',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        //3
        DB::table('tools')->insert([
            'category_id' => 1,
            'name' => 'Learning to Share the Gospel',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        //4
        DB::table('tools')->insert([
            'category_id' => 1,
            'name' => 'Mentoring for Multiplication',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        //5
        DB::table('tools')->insert([
            'category_id' => 1,
            'name' => 'Means of Growth',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        //6
        DB::table('tools')->insert([
            'category_id' => 1,
            'name' => 'Reasonable Answers for Honest Skeptics',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        //7
        DB::table('tools')->insert([
            'category_id' => 2,
            'name' => 'Workshop Hope For Kids',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        //8
        DB::table('tools')->insert([
            'category_id' => 2,
            'name' => 'Hope For Kids',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        // INTERVALOS
        DB::table('unities')->insert([
            'tool_id' => null,
            'order' => null,
            'duration' => '00:30',
            'name' => 'Interval',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => null,
            'order' => null,
            'duration' => '00:30',
            'name' => 'Lunch',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => null,
            'order' => null,
            'duration' => '00:30',
            'name' => 'CoffeeBreak',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);


        // Clinic
        for ($i=1; $i <= 22; $i++) {
            DB::table('unities')->insert([
                'tool_id' => 1,
                'order' => $i,
                'duration' => '00:30',
                'name' => 'Unity name',
                'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
            ]);
        }

        // WESM
        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 1,
            'duration' => '00:30',
            'name' => 'PART ONE — Why Are We Here? || PART TWO — Why It’s So Hard to Share Our Faith',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 2,
            'duration' => '00:30',
            'name' => 'Learning the Hand Outline of the Gospel',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 3,
            'duration' => '00:30',
            'name' => 'Overcoming the Fear of Witnessing',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 4,
            'duration' => '00:30',
            'name' => 'Finding People Who Are Open',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 5,
            'duration' => '00:30',
            'name' => 'Sharing the Gospel With Stories',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 6,
            'duration' => '00:30',
            'name' => 'Leading in Commitment',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 7,
            'duration' => '00:30',
            'name' => 'Developing a Love for the Lost',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        DB::table('unities')->insert([
            'tool_id' => 2,
            'order' => 8,
            'duration' => '00:30',
            'name' => 'Together in His Harvest',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        // e2
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'Connecting and Caring',
            'order' => 1,
            'duration' => '01:00',
            'name' => 'Connecting and Caring',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'The Grace of God',
            'order' => 2,
            'duration' => '01:00',
            'name' => 'The Gospel : Grace',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'The Condition of Man',
            'order' => 3,
            'duration' => '01:00',
            'name' => 'The Gospel : Man',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'The Power of Your Story',
            'order' => 4,
            'duration' => '01:00',
            'name' => 'Sharing Your Story',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'God and Christ',
            'order' => 5,
            'duration' => '01:00',
            'name' => 'The Gospel : God and Christ',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'Understanding Faith',
            'order' => 6,
            'duration' => '01:00',
            'name' => 'The Gospel : Faith',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 3,
            'devotional' => 'Commitment',
            'order' => 7,
            'duration' => '01:00',
            'name' => 'Commitment',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        // m2
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'Power from on High',
            'order' => 1,
            'duration' => '01:00',
            'name' => 'The Making of a Mentor—Be a Leader',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'Jesus as Mentor',
            'order' => 2,
            'duration' => '01:00',
            'name' => 'The Method of a Mentor—Be a Trainer',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'Divine Appointments',
            'order' => 3,
            'duration' => '01:00',
            'name' => 'The Model of a Mentor—Be a Connector',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'The Art of Storytelling',
            'order' => 4,
            'duration' => '01:00',
            'name' => 'The Message of a Mentor—Be a Storyteller',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'The Value of Servanthood',
            'order' => 5,
            'duration' => '01:00',
            'name' => 'The Manner of a Mentor—Be a Servant',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'Would-Be Followers',
            'order' => 6,
            'duration' => '01:00',
            'name' => 'The Mark of a Mentor—Be a Disciple-Maker',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 4,
            'devotional' => 'Multiply',
            'order' => 7,
            'duration' => '01:00',
            'name' => 'The Mission of a Mentor—Be a Multiplier ',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        // c2
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 1,
            'duration' => '01:00',
            'name' => 'Salvation',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 2,
            'duration' => '01:00',
            'name' => 'Bible',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 3,
            'duration' => '01:00',
            'name' => 'Prayer',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 4,
            'duration' => '01:00',
            'name' => 'Worship',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 5,
            'duration' => '01:00',
            'name' => 'Fellowship',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 6,
            'duration' => '01:00',
            'name' => 'Witness',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 5,
            'order' => 7,
            'duration' => '01:00',
            'name' => 'Guidance',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        // r2
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'The Word of Truth',
            'order' => 1,
            'duration' => '01:00',
            'name' => 'Handling the Word of Truth',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'Attitude is Everything',
            'order' => 2,
            'duration' => '01:00',
            'name' => 'Five Ways to Handle an Objection to the Gospel',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'The Reliability of the Bible',
            'order' => 3,
            'duration' => '01:00',
            'name' => 'The Reliability of the Bible',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'God is Real ',
            'order' => 4,
            'duration' => '01:00',
            'name' => 'God is Real',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'The Perfect Justice of God',
            'order' => 5,
            'duration' => '01:00',
            'name' => '“How can God allow evil?” || “Could God send people to Hell?”',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'Only One Way',
            'order' => 6,
            'duration' => '01:00',
            'name' => '“How can Jesus be the only way?”',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);
        DB::table('unities')->insert([
            'tool_id' => 6,
            'devotional' => 'Creation Announces God',
            'order' => 7,
            'duration' => '01:00',
            'name' => '“What about those who have never heard?” || “What about the hypocrites?”',
            'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
        ]);

        for ($i=1; $i <= 14; $i++) {
            DB::table('unities')->insert([
                'tool_id' => 7,
                'order' => $i,
                'duration' => '01:00',
                'name' => 'Unity name',
                'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
            ]);
        }

        for ($i=1; $i <= 12; $i++) {
            DB::table('unities')->insert([
                'tool_id' => 8,
                'order' => $i,
                'duration' => '01:00',
                'name' => 'Unity name',
                'knowhow' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A vitae maiores numquam cum animi, doloremque eum esse! Provident numquam quae natus velit eaque, dolorem ullam blanditiis assumenda labore quaerat! Ipsa!'
            ]);
        }

    }
}
