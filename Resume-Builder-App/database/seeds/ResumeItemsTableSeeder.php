<?php

use Illuminate\Database\Seeder;
use App\ResumeItem;

class ResumeItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //skills -> category 1
        ResumeItem::create([
            'name' => 'Front End Development',
            'description' => 'Working with JavaScript and frameworks such as React, Vue, Angular, jQuery, and Lodash.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Back End Development',
            'description' => 'Java, C#, Python.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Full Stack Development',
            'description' => 'MEAN Stack, .Net Core, MERN Stack.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Content Management Systems',
            'description' => 'Developing WordPress sites and creating/customizing themes.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Server Administration',
            'description' => 'AWS EC2 and Lightsail, Bitnami, CPanel, LAMP, WAMP, and XAMPP.',
            'category' => "1"
        ]);
        ResumeItem::create([
            'name' => 'Database Administration',
            'description' => 'MySQL, Oracle, MongoDB',
            'category' => "1"
        ]);
        //education -> category 3
        ResumeItem::create([
            'name' => 'IT Web Development Diploma',
            'description' => 'NSCC Truro; recipient of the NSCC Entrance Award; graduation June 2020.',
            'category' => "3"
        ]);
        ResumeItem::create([
            'name' => 'High School Diploma',
            'description' => 'CEC Truro; French Immersion Certificate; recipient of the Dr. Regis Callaghan Memorial Awad; graduated June 2018.',
            'category' => "3"
        ]);
        //work experience -> category 2
        ResumeItem::create([
            'name' => 'Greenhorn Solutions Dev.',
            'description' => ' Work placement for college program for month of May, 2019. Built Wordpress sites for clients based off needs gathering. Followed Agile/Scrum methodologies',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'NSCC Java/Javascript Tutor',
            'description' => 'February 2020 to present. Peer tutoring with NSCC program.',
            'category' => "2"
        ]);
        ResumeItem::create([
            'name' => 'Sobeys Deli Clerk/Cashier',
            'description' => 'July 2017 to present. Worked customer service roles.',
            'category' => "2"
        ]);
        //certifications/awards/projects/etc -> category 4
        ResumeItem::create([
            'name' => 'DELF B1 Exam',
            'description' => 'French language proficiency test - passed with an 86.5%.',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Halisi Travel & Adventure',
            'description' => 'Work placement project; worked with client from Tanzania, developed WordPress site.',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'NSCC Entrance Award',
            'description' => 'Full first year tuition scholarship based on academic excellence through highschool career.',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Dr. Regis Callaghan Memorial',
            'description' => 'Scholarship awarded for academic excellence in highschool.',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Portfolio Site',
            'description' => 'WordPress site developed to showcase skills and experience. (https://hannahgrinton)',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'TMF Revenue Manager',
            'description' => 'Custom solution developed for client as a capstone project for college program. Uses .Net Core, Bootstrap, Font Awesome.',
            'category' => "4"
        ]);
        ResumeItem::create([
            'name' => 'Programming Instructor',
            'description' => 'Volunteered to teach web programming to middle school students; 6 week course, included: HTML, CSS, JavaScript, jQuery, and basic server administration.',
            'category' => "4"
        ]);
        // ResumeItem::create([
        //     'name' => '',
        //     'description' => '',
        //     'category' => 0
        // ]);
        // ResumeItem::create([
        //     'name' => '',
        //     'description' => '',
        //     'category' => 0
        // ]);
        // ResumeItem::create([
        //     'name' => '',
        //     'description' => '',
        //     'category' => 0
        // ]);
    }
}
