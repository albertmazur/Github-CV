<?php

return [
    "index" =>[
        "page_home" => "Strona główna",
    ],
    "home" => [
        "title" => "Generowanie CV",
        "text_home" => "Podaj nick do githuba aby wygenerować CV.",
        "username" => "Nazwa użytkownika",
        "generate_cv" => "Generuj CV"
    ],
    "cv" => [
        "print" => "Drukuj",
        "portfolio" => "Portfolio",
        "repository" => "Repozytorium",
        "list_languages" => "Lista języków użytych w projekcjach",
        "list_repo" => "Lista repozytorów z Githuba"
    ],
    "error" =>[
        "not_found_user" => "Nie istnieje taki użytkownik.",
        "not_connection_github" => "Brak połączenia z Githubem. Spróbuj poźniej.",
        "forbidden_github" => "Brak uprawnien do Githuba. Spróbuj poźniej.",
    ],
    "error_page" =>[
        "404" =>[
            'back_home_page' => "Wróć na stronę główną",
            'not_found' => "Nie znaleziono strony.",
            'not_found_text' => "Przepraszamy, nie możemy znaleźć tej strony."
        ],
        "500" =>[
            "server_error" => "Błąd serwera.",
            "server_error_text" => "Pracujemy już nad rozwiązaniem problemu."
        ]
    ],
    "alert" =>[
        "info" => "Info"
    ]
];
