<?php

namespace AccountBundle\Controller;

use AccountBundle\Entity\Account;
use AccountBundle\Entity\Transaction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Account controller.
 *
 * @Route("account")
 */
class AccountController extends Controller
{
    /**
     * Lists all account entities.
     *
     * @Route("/", name="account_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accounts = $em->getRepository('AccountBundle:Account')->findAll();

        return $this->render('account/index.html.twig', array(
            'accounts' => $accounts,
        ));
    }

    /**
     * Creates a new account entity.
     *
     * @Route("/new", name="account_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $account = new Account();
        $form = $this->createForm('AccountBundle\Form\AccountType', $account);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            return $this->redirectToRoute('account_show', array('id' => $account->getId()));
        }

        return $this->render('account/new.html.twig', array(
            'account' => $account,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a account entity.
     *
     * @Route("/{id}", name="account_show")
     * @Method("GET")
     */
    public function showAction(Account $account)
    {
        $deleteForm = $this->createDeleteForm($account);

        return $this->render('account/show.html.twig', array(
            'account' => $account,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing account entity.
     *
     * @Route("/{id}/edit", name="account_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Account $account)
    {
        $deleteForm = $this->createDeleteForm($account);
        $editForm = $this->createForm('AccountBundle\Form\AccountType', $account);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('account_edit', array('id' => $account->getId()));
        }

        return $this->render('account/edit.html.twig', array(
            'account' => $account,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a account entity.
     *
     * @Route("/{id}", name="account_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Account $account)
    {
        $form = $this->createDeleteForm($account);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($account);
            $em->flush();
        }

        return $this->redirectToRoute('account_index');
    }

//Add beneficiaries
     /**
     * @Route("/{id}/assign/beneficiary", name="assign_beneficiary")
     * @Method({"GET", "POST"})
     */

     public function assignBeneficiary(Request $request, Account $account){
        $assignForm = $this->createForm('AccountBundle\Form\BeneficiaryType', $account);

        $assignForm->handleRequest($request);

        if ($assignForm->isSubmitted() && $assignForm->isValid()) {
            
            //To add beneficiary to the exit beneficiaries
            $beneficiaries = $assignForm->get('beneficiaries')->getData();
            foreach ($beneficiaries as $beneficiary) {
                $account->addBeneficiary($beneficiary);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('account_show', array('id' => $account->getId()));
        }

        return $this->render('account/assign_benficiary.html.twig', array(
            'account' => $account,
            'assign_form' => $assignForm->createView(),
        ));
     }


//Add Transaction beneficiaries
     /**
     * @Route("/{id}/transaction/beneficiary", name="transaction_beneficiary")
     * @Method({"GET", "POST"})
     */

     public function transactionBeneficiary(Request $request, Account $account){
        $transaction = new Transaction();

        $transactionForm = $this->createForm('AccountBundle\Form\TransactionBeneficiaryType', $transaction, array('account' => $account));

        $transactionForm->handleRequest($request);

        if ($transactionForm->isSubmitted() && $transactionForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $transaction->setStartAccount($account);
            $em->persist($transaction);
            $em->flush();

            return $this->redirectToRoute('account_show', array('id' => $account->getId()));
        }

        return $this->render('account/transaction_benficiary.html.twig', array(
            'transaction_form' => $transactionForm->createView(),
        ));
     }


    /**
     * Creates a form to delete a account entity.
     *
     * @param Account $account The account entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Account $account)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('account_delete', array('id' => $account->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
