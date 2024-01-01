<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'attach' => 'Attach',
        'detach' => 'Detach',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'nom' => 'Nom',
            'prenom' => 'Prenom',
            'email' => 'Email',
            'telephone' => 'Telephone',
            'region' => 'Region',
            'adresse' => 'Adresse',
            'ville' => 'Ville',
            'pays' => 'Pays',
            'password' => 'Password',
        ],
    ],

    'caracteristiques' => [
        'name' => 'Caracteristiques',
        'index_title' => 'Caracteristiques List',
        'new_title' => 'New Caracteristique',
        'create_title' => 'Create Caracteristique',
        'edit_title' => 'Edit Caracteristique',
        'show_title' => 'Show Caracteristique',
        'inputs' => [
            'nom' => 'Nom',
            'produit_id' => 'Produit',
        ],
    ],

    'produits' => [
        'name' => 'Produits',
        'index_title' => 'Produits List',
        'new_title' => 'New Produit',
        'create_title' => 'Create Produit',
        'edit_title' => 'Edit Produit',
        'show_title' => 'Show Produit',
        'inputs' => [
            'thumbnail' => 'Thumbnail',
            'nom' => 'Nom',
            'categorie_id' => 'Categorie',
            'description' => 'Description',
        ],
    ],

    'produit_caracteristiques' => [
        'name' => 'Produit Caracteristiques',
        'index_title' => 'Caracteristiques List',
        'new_title' => 'New Caracteristique',
        'create_title' => 'Create Caracteristique',
        'edit_title' => 'Edit Caracteristique',
        'show_title' => 'Show Caracteristique',
        'inputs' => [
            'nom' => 'Nom',
        ],
    ],

    'caracteristique_details' => [
        'name' => 'Caracteristique Details',
        'index_title' => 'Details List',
        'new_title' => 'New Detail',
        'create_title' => 'Create Detail',
        'edit_title' => 'Edit Detail',
        'show_title' => 'Show Detail',
        'inputs' => [
            'thumbnail' => 'Thumbnail',
            'nom' => 'Nom',
            'prix' => 'Prix',
            'detail_id' => 'Detail',
        ],
    ],

    'user_commandes' => [
        'name' => 'User Commandes',
        'index_title' => 'Commandes List',
        'new_title' => 'New Commande',
        'create_title' => 'Create Commande',
        'edit_title' => 'Edit Commande',
        'show_title' => 'Show Commande',
        'inputs' => [
            'ref' => 'Ref',
            'produit_id' => 'Produit',
            'qauntite' => 'Qauntite',
            'prixTotale' => 'Prix Totale',
            'statu' => 'Statu',
        ],
    ],

    'commandes' => [
        'name' => 'Commandes',
        'index_title' => 'Commandes List',
        'new_title' => 'New Commande',
        'create_title' => 'Create Commande',
        'edit_title' => 'Edit Commande',
        'show_title' => 'Show Commande',
        'inputs' => [
            'ref' => 'Ref',
            'produit_id' => 'Produit',
            'user_id' => 'User',
            'qauntite' => 'Qauntite',
            'prixTotale' => 'Prix Totale',
            'statu' => 'Statu',
        ],
    ],
];
