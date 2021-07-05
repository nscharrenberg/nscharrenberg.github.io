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
        'description' => 'Fusce tempor magna mi, non egestas velit ultricies nec. Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna, a placerat sapien pretium eu.',
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
                'icon_class' => 'lnr lnr-smile',
                'title' => 'Happy Clients',
                'value' => '13',
                'text' => ''
            ],
            [
                'icon_class' => 'lnr lnr-graduation-hat',
                'title' => 'Studies',
                'value' => '2',
                'text' => ''
            ],
            [
                'icon_class' => 'lnr lnr-code',
                'title' => 'Projects',
                'value' => '15',
                'text' => ''
            ],
            [
                'icon_class' => 'lnr lnr-hourglass',
                'title' => 'Longest Playing Game',
                'value' => '16',
                'text' => 'years'
            ],
        ],
        'skills' => [
            'design_skills' => [
                'title' => 'Design Skills',
                'percentages' => [
                    [
                        'title' => 'UX Design',
                        'value' => 95
                    ],
                    [
                        'title' => 'Print Design',
                        'value' => 25
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
                        'title' => 'C#',
                        'value' => 45
                    ],
                    [
                        'title' => 'React(-native)',
                        'value' => 75
                    ],
                ]
            ]
        ]
    ],
    'site' => [
        'footer_text' => 'Made with love',
        'hidden' => [
            'what_i_do' => false,
            'testimonials' => false,
            'clients' => false,
            'facts' => false,
            'pricing' => false,
        ],
        'what_i_do' => [
            '1' => [
                'software_engineer' => [
                    'title' => 'Software Engineer',
                    'description' => 'Write text here',
                    'icon_class' => 'lnr lnr-magic-wand'
                ],
                'web_developer' => [
                    'title' => 'Web Developer',
                    'description' => 'Write text here',
                    'icon_class' => 'lnr lnr-screen'
                ],
            ],
            '2' => [
                'backend_developer' => [
                    'title' => 'Backend Developer',
                    'description' => 'Write text here',
                    'icon_class' => 'lnr lnr-cloud',
                ],
                'frontend_developer' => [
                    'title' => 'Front-end Developer',
                    'description' => 'Write text here',
                    'icon_class' => 'lnr lnr-smartphone',
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
            'path' => 'project_categories',
            'projects' => function ($page, $allProjects) {
                return $allProjects->filter(function ($project) use ($page) {
                    return $project->tags && in_array($page->getFilename(), $project->tags, true);
                });
            },
        ]
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
