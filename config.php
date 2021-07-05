<?php
use Illuminate\Support\Str;
return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Noah Scharrenberg',
    'description' => 'My Personal Portfolio & Resume',
    'portfolio' => [
        'first_name' => 'Noah',
        'last_name' => 'Scharrenberg',
        'picture' => 'https://www.nicepng.com/png/detail/202-2024687_profile-icon-for-the-politics-category-profile-icon.png',
        'description' => 'An investment in knowledge always pays the best interest.',
        'roles' => [
            'Software Engineer',
            'Backend Developer',
            'Web Developer',
            'Front-end Developer'
        ],
        'socials' => [
            'linkedin' => 'nscharrenberg',
            'github' => 'nscharrenberg',
            'website' => 'https://nscharrenberg.nl'
        ],
        'facts' => [
            [
                'icon_class' => 'lnr lnr-graduation-hat',
                'title' => 'Studies',
                'value' => '2',
                'text' => ''
            ],
            [
                'icon_class' => 'lnr lnr-smile',
                'title' => 'Happy Team members',
                'value' => '20+',
                'text' => ''
            ],
            [
                'icon_class' => 'lnr lnr-code',
                'title' => 'Programming for',
                'value' => '6+',
                'text' => 'years (hobby & professional)'
            ],
            [
                'icon_class' => 'lnr lnr-hourglass',
                'title' => 'Longest Playing Game',
                'value' => '16',
                'text' => 'years'
            ],
        ],
        'skills' => [
            'engineering_skills' => [
                'title' => 'Engineering Skills',
                'percentages' => [
                    [
                        'title' => 'Software Design',
                        'value' => 60
                    ],
                    [
                        'title' => 'Software Testing',
                        'value' => 60
                    ],
                    [
                        'title' => 'Software Analysis',
                        'value' => 60
                    ],
                    [
                        'title' => 'Cloud Services (Firebase)',
                        'value' => 60
                    ],
                    [
                        'title' => 'Microservices',
                        'value' => 50
                    ],
                ]
            ],
            'coding_skills' => [
                'title' => 'Coding Skills',
                'percentages' => [
                    [
                        'title' => 'Java',
                        'value' => 95
                    ],
                    [
                        'title' => 'Javascript',
                        'value' => 90
                    ],
                    [
                        'title' => 'PHP',
                        'value' => 70
                    ],
                    [
                        'title' => 'C#',
                        'value' => 45
                    ],
                    [
                        'title' => 'Python',
                        'value' => 25
                    ],
                ]
            ],
            'framework_knowledge' => [
                'title' => 'Framework Knowledge',
                'percentages' => [
                    [
                        'title' => 'React(-native)',
                        'value' => 80
                    ],
                    [
                        'title' => 'Spring Boot',
                        'value' => 75
                    ],
                    [
                        'title' => 'Laravel',
                        'value' => 75
                    ],
                    [
                        'title' => 'Flask',
                        'value' => 60
                    ],
                    [
                        'title' => 'asp.net (core)',
                        'value' => 50
                    ],
                    [
                        'title' => 'Hyperledger Fabric',
                        'value' => 45
                    ],
                ]
            ]
        ]
    ],
    'site' => [
        'footer_text' => 'Made with love',
        'hidden' => [
            'what_i_do' => false,
            'testimonials' => true,
            'clients' => true,
            'facts' => false,
            'pricing' => true,
        ],
        'what_i_do' => [
            '1' => [
                'software_engineer' => [
                    'title' => 'Software Engineer',
                    'description' => '',
                    'icon_class' => 'lnr lnr-magic-wand'
                ],
                'web_developer' => [
                    'title' => 'Web Developer',
                    'description' => 'Developing applications using React & React-Native, while doing hobby projects with Vue.',
                    'icon_class' => 'lnr lnr-screen'
                ],
            ],
            '2' => [
                'backend_developer' => [
                    'title' => 'Backend Developer',
                    'description' => 'Developing applications using Spring Boot, Laravel, Flask & Cloud Services such as Firebase.',
                    'icon_class' => 'lnr lnr-cloud',
                ],
            ]
        ],
        'testimonials' => [
            'john_doe' => [
                'name' => 'John Doe',
                'image' => 'https://st.depositphotos.com/2218212/2938/i/600/depositphotos_29387653-stock-photo-facebook-profile.jpg',
                'job_title' => 'Software Engineer at Gooble',
                'text' => 'Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.',
            ],
            'irek_blaats' => [
                'name' => 'Irek Blaats',
                'image' => 'https://st.depositphotos.com/2218212/2938/i/600/depositphotos_29387653-stock-photo-facebook-profile.jpg',
                'job_title' => 'Teacher at Bontys University',
                'text' => 'Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.',
            ],
            'ramtijn_goossens' => [
                'name' => 'Ramtijn Goossens',
                'image' => 'https://st.depositphotos.com/2218212/2938/i/600/depositphotos_29387653-stock-photo-facebook-profile.jpg',
                'job_title' => 'Teacher at Bontys University',
                'text' => 'Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien consequat porta a sit amet diam.',
            ]
        ],
        'clients' => [
            [
                'name' => 'Your Logo',
                'image' => 'https://image.shutterstock.com/image-vector/vector-design-elements-your-company-260nw-709133980.jpg',
                'link' => '#',
            ],
            [
                'name' => 'Company Name',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZXBYSP5NQa2BdKsA4QTAYUpCzxJ5kdbnFqQ&usqp=CAU',
                'link' => '#',
            ],
        ],
        'pricing' => [
            'silver' => [
                'title' => 'Freelance',
                'currency' => '&euro;',
                'price' => '64',
                'frequency' => 'per month',
                'highlighted' => true,
                'services' => [
                    'Lorem ipsum dolor',
                    'Pellentesque scelerisque',
                    'Morbi eu sagittis',
                ],
                'button' => [
                    'text' => 'Contact Now',
                    'link' => '/contact'
                ],
            ]
        ]
    ],
    'collections' => [
        'experiences' => [
            'path' => 'experience',
            'sort' => ['order', '-start_date', '-until_date', 'company', 'position'],
        ],
        'educations' => [
            'path' => 'education',
            'sort' => ['order', '-start_date', '-until_date', 'study', 'institute'],
        ],
        'certificates' => [
            'path' => 'certificate',
            'sort' => ['order', '-date', 'title', 'subtitle'],
        ],
        'projects' => [
            'path' => 'projects',
            'sort' => ['order', '-start_date', '-until_date', 'title', 'client'],
        ],
        'project_categories' => [
            'path' => '/projects/categories/{filename}',
            'projects' => function ($page, $allProjects) {
                return $allProjects->filter(function ($project) use ($page) {
                    return $project->tags && in_array($page->getFilename(), $project->tags, true);
                });
            },
        ],
        'posts' => [
            'author' => 'Noah Scharrenberg', // Default author, if not provided in a post
            'sort' => '-posted_at',
            'path' => 'blog/{filename}',
        ],
    ],
    // helpers
    'getDate' => function ($page, $field = null) {
        return Datetime::createFromFormat('U', is_null($field) ? $page->date : $page[$field]);
    },
    'isActive' => function ($page, $path) {
        if (trimPath($page->getPath()) == '' && trimPath($path) == '') {
            return true;
        }

        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'slugify' => function ($page, $value) {
    return Str::slug($value);
    }
];
