<?php

return [
    "index" =>[
        "page_home" => "Home",
    ],
    "home" => [
        "title" => "CV generation",
        "text_home" => "Enter your github nickname to generate your CV.",
        "username" => "Nickname",
        "generate_cv" => "Generate CV"
    ],
    "cv" => [
        "print" => "Print",
        "portfolio" => "Portfolio",
        "repository" => "Repository",
        "list_languages" => "List of languages ​​used in projections",
        "list_repo" => "Github repository list"
    ],
    "error" =>[
        "not_found_user" => "There is no such user.",
        "not_connection_github" => "No connection to Github. Please try again later.",
        "forbidden_github" => "No Github permissions. Please try again later.",
    ],
    "error_page" =>[
        "404" =>[
            'back_home_page' => "Return to the home page",
            'not_found' => "Page not found.",
            'not_found_text' => "Sorry, we cannot find this page."
        ],
        "500" =>[
            "server_error" => "Server error.",
            "server_error_text" => "We are already working on solving the problem."
        ]
    ],
    "alert" =>[
        "info" => "Info"
    ]
];
