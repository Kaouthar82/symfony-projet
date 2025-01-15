<?php
// src/Controller/ProductController.php
namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    // Route pour afficher le formulaire et ajouter un produit
    #[Route('/product/new', name: 'product_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Créer un nouvel objet Product (une instance de l'entité)
        $product = new Product();

        // Créer le formulaire à partir du type ProductType
        $form = $this->createForm(ProductType::class, $product);

        // Traite les données envoyées par l'utilisateur via le formulaire
        $form->handleRequest($request);

        // Si le formulaire est valide, on sauvegarde les données dans la base de données
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();

            // Redirige vers la page 'product_list' après l'ajout
            return $this->redirectToRoute('product_list');
        }

        // Si le formulaire n'est pas soumis, juste l'affiche
        return $this->render('product/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Route pour afficher la liste des produits
    #[Route('/products', name: 'product_list')]
    public function list(): Response
    {
        // Récupérer la liste des produits depuis la base de données
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render('product/list.html.twig', [
            'products' => $products,
        ]);
    }
}


?>

