<?php
namespace T3CM\T3cmsponsor\Controller;

class SponsorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * Sponsor-Repository
     *
     * @var \T3CM\T3cmsponsor\Domain\Repository\SponsorRepository
     * @inject
     */
    protected $sponsorRepository;

    /**
     * @param \T3CM\T3cmsponsor\Domain\Repository\SponsorRepository $sponsorRepository
     */
    public function injectSponsorRepository(\T3CM\T3cmsponsor\Domain\Repository\SponsorRepository $sponsorRepository) {
        $this->sponsorRepository = $sponsorRepository;
}

    public function sliderAction(){
        $sponsors = $this->sponsorRepository->findAll();
        $this->view->assign('sponsors',$sponsors);

    }

}