<?php
/**
 * Page Devenir Partenaire - CIA Invest
 * 
 * Formulaire de candidature pour devenir partenaire de CIA Invest
 * 
 * @package CIA_Invest
 * @version 1.0
 */

// Configuration de la page
$current_page = 'devenir-partenaire';
$page_title = 'Devenir Partenaire';

// Inclure le header
include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="registration-hero">
    <div class="hero-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <div class="hero-badge mb-3">
                    <i class="bi bi-handshake me-2"></i>Programme de Partenariat
                </div>
                <h1 class="hero-title text-white mb-3">Devenez Partenaire de CIA Invest</h1>
                <p class="hero-subtitle text-white mb-0">Rejoignez notre écosystème et contribuez au développement de l'entrepreneuriat africain</p>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center" data-aos="fade-up">
                <h2 class="section-title mb-3">Pourquoi devenir partenaire ?</h2>
                <p class="section-description">Ensemble, façonnons l'avenir de l'entrepreneuriat africain</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                <div class="benefit-card">
                    <div class="benefit-icon" style="background: linear-gradient(135deg, #19875415 0%, #19875405 100%);">
                        <i class="bi bi-graph-up-arrow" style="color: #198754;"></i>
                    </div>
                    <h4 class="benefit-title">Visibilité accrue</h4>
                    <p class="benefit-desc">Augmentez votre visibilité auprès d'une communauté d'entrepreneurs et d'investisseurs</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon" style="background: linear-gradient(135deg, #19875415 0%, #19875405 100%);">
                        <i class="bi bi-people-fill" style="color: #198754;"></i>
                    </div>
                    <h4 class="benefit-title">Réseau exclusif</h4>
                    <p class="benefit-desc">Accédez à un réseau privilégié de partenaires stratégiques et d'opportunités</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon" style="background: linear-gradient(135deg, #19875415 0%, #19875405 100%);">
                        <i class="bi bi-trophy" style="color: #198754;"></i>
                    </div>
                    <h4 class="benefit-title">Impact social</h4>
                    <p class="benefit-desc">Contribuez activement au développement économique et entrepreneurial en Afrique</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Form Section -->
<section class="registration-section py-5">
    <div class="container">
        <!-- Page Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center" data-aos="fade-up">
                <span class="section-badge">Candidature</span>
                <h2 class="section-title">Formulaire de candidature</h2>
                <p class="section-description">Complétez le formulaire ci-dessous pour soumettre votre candidature de partenariat</p>
            </div>
        </div>

        <!-- Form -->
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-body p-4">
                        <form id="partnershipForm" method="POST" action="">
                            <!-- Type de Partenariat -->
                            <div class="mb-4">
                                <label class="form-label fw-bold mb-3">Type de partenariat souhaité <span class="text-danger">*</span></label>
                                <div class="profile-type-selector">
                                    <div class="profile-card">
                                        <input class="form-check-input" type="radio" name="partnershipType" id="strategic" value="strategic" checked>
                                        <label class="profile-card-label" for="strategic">
                                            <div class="profile-card-icon">
                                                <i class="bi bi-diagram-3"></i>
                                            </div>
                                            <div class="profile-card-content">
                                                <h6 class="profile-card-title">Partenaire Stratégique</h6>
                                                <p class="profile-card-desc">Collaboration stratégique</p>
                                            </div>
                                            <div class="profile-card-check">
                                                <i class="bi bi-check-circle-fill"></i>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="profile-card">
                                        <input class="form-check-input" type="radio" name="partnershipType" id="institutional" value="institutional">
                                        <label class="profile-card-label" for="institutional">
                                            <div class="profile-card-icon">
                                                <i class="bi bi-bank"></i>
                                            </div>
                                            <div class="profile-card-content">
                                                <h6 class="profile-card-title">Partenaire Institutionnel</h6>
                                                <p class="profile-card-desc">Institution financière</p>
                                            </div>
                                            <div class="profile-card-check">
                                                <i class="bi bi-check-circle-fill"></i>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="profile-card">
                                        <input class="form-check-input" type="radio" name="partnershipType" id="commercial" value="commercial">
                                        <label class="profile-card-label" for="commercial">
                                            <div class="profile-card-icon">
                                                <i class="bi bi-shop"></i>
                                            </div>
                                            <div class="profile-card-content">
                                                <h6 class="profile-card-title">Partenaire Commercial</h6>
                                                <p class="profile-card-desc">Partenariat commercial</p>
                                            </div>
                                            <div class="profile-card-check">
                                                <i class="bi bi-check-circle-fill"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Informations sur l'organisation -->
                            <h5 class="mb-3"><i class="bi bi-building me-2"></i>Informations sur votre organisation</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="orgName" class="form-label">Nom de l'organisation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="orgName" name="orgName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="orgType" class="form-label">Type d'organisation <span class="text-danger">*</span></label>
                                    <select class="form-select" id="orgType" name="orgType" required>
                                        <option value="">Sélectionnez</option>
                                        <option value="entreprise">Entreprise privée</option>
                                        <option value="banque">Banque / Institution financière</option>
                                        <option value="ong">ONG / Association</option>
                                        <option value="gouvernement">Organisme gouvernemental</option>
                                        <option value="universite">Université / Établissement d'enseignement</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="orgSector" class="form-label">Secteur d'activité <span class="text-danger">*</span></label>
                                    <select class="form-select" id="orgSector" name="orgSector" required>
                                        <option value="">Sélectionnez</option>
                                        <option value="technologie">Technologie</option>
                                        <option value="finance">Finance</option>
                                        <option value="education">Éducation</option>
                                        <option value="sante">Santé</option>
                                        <option value="agriculture">Agriculture</option>
                                        <option value="energie">Énergie</option>
                                        <option value="immobilier">Immobilier</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="industrie">Industrie</option>
                                        <option value="services">Services</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="orgSize" class="form-label">Taille de l'organisation <span class="text-danger">*</span></label>
                                    <select class="form-select" id="orgSize" name="orgSize" required>
                                        <option value="">Sélectionnez</option>
                                        <option value="1-10">1-10 employés</option>
                                        <option value="11-50">11-50 employés</option>
                                        <option value="51-200">51-200 employés</option>
                                        <option value="201-500">201-500 employés</option>
                                        <option value="500+">Plus de 500 employés</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="orgWebsite" class="form-label">Site web</label>
                                <input type="url" class="form-control" id="orgWebsite" name="orgWebsite" placeholder="https://www.exemple.com">
                            </div>

                            <div class="mb-3">
                                <label for="orgDescription" class="form-label">Description de votre organisation <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="orgDescription" name="orgDescription" rows="4" required placeholder="Présentez brièvement votre organisation et ses activités..."></textarea>
                            </div>

                            <!-- Informations du contact -->
                            <h5 class="mb-3 mt-4"><i class="bi bi-person-lines-fill me-2"></i>Personne de contact</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contactLastName" class="form-label">Nom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactLastName" name="contactLastName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contactFirstName" class="form-label">Prénom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactFirstName" name="contactFirstName" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contactPosition" class="form-label">Fonction <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="contactPosition" name="contactPosition" placeholder="Ex: Directeur Général" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contactEmail" class="form-label">Email professionnel <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contactPhone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="contactPhone" name="contactPhone" placeholder="+225 XX XX XX XX XX" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contactWhatsapp" class="form-label">WhatsApp</label>
                                    <input type="tel" class="form-control" id="contactWhatsapp" name="contactWhatsapp" placeholder="+225 XX XX XX XX XX">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Pays <span class="text-danger">*</span></label>
                                <select class="form-select" id="country" name="country" required>
                                    <option value="">Sélectionnez un pays</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="ML">Mali</option>
                                    <option value="SN">Sénégal</option>
                                    <option value="BJ">Bénin</option>
                                    <option value="TG">Togo</option>
                                    <option value="GH">Ghana</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="CM">Cameroun</option>
                                    <option value="KE">Kenya</option>
                                    <option value="ZA">Afrique du Sud</option>
                                    <option value="Other">Autre</option>
                                </select>
                            </div>

                            <!-- Motivation pour le partenariat -->
                            <h5 class="mb-3 mt-4"><i class="bi bi-lightbulb me-2"></i>Votre projet de partenariat</h5>
                            <div class="mb-3">
                                <label for="partnershipGoals" class="form-label">Objectifs du partenariat <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="partnershipGoals" name="partnershipGoals" rows="4" required placeholder="Décrivez vos objectifs et ce que vous souhaitez accomplir à travers ce partenariat..."></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="partnershipValue" class="form-label">Valeur ajoutée proposée <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="partnershipValue" name="partnershipValue" rows="4" required placeholder="Qu'apporteriez-vous à CIA Invest et à son écosystème ?"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="partnershipResources" class="form-label">Ressources que vous pouvez mobiliser</label>
                                <textarea class="form-control" id="partnershipResources" name="partnershipResources" rows="3" placeholder="Financières, humaines, techniques, réseau, etc."></textarea>
                            </div>

                            <!-- Préférences de collaboration -->
                            <div class="mb-3">
                                <label class="form-label">Domaines de collaboration souhaités <span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab1" name="collaboration[]" value="financement">
                                            <label class="form-check-label" for="collab1">
                                                Financement de projets
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab2" name="collaboration[]" value="formation">
                                            <label class="form-check-label" for="collab2">
                                                Formation et accompagnement
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab3" name="collaboration[]" value="evenements">
                                            <label class="form-check-label" for="collab3">
                                                Organisation d'événements
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab4" name="collaboration[]" value="mentoring">
                                            <label class="form-check-label" for="collab4">
                                                Mentorat et coaching
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab5" name="collaboration[]" value="recherche">
                                            <label class="form-check-label" for="collab5">
                                                Recherche et développement
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab6" name="collaboration[]" value="reseau">
                                            <label class="form-check-label" for="collab6">
                                                Développement de réseau
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab7" name="collaboration[]" value="technologie">
                                            <label class="form-check-label" for="collab7">
                                                Solutions technologiques
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="collab8" name="collaboration[]" value="autre">
                                            <label class="form-check-label" for="collab8">
                                                Autre
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Documents complémentaires (optionnel) -->
                            <div class="mb-3">
                                <label for="additionalInfo" class="form-label">Informations complémentaires</label>
                                <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="3" placeholder="Toute autre information que vous jugez pertinente..."></textarea>
                            </div>

                            <!-- Acceptation des termes -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        J'accepte que mes informations soient traitées dans le cadre de l'examen de ma candidature de partenariat <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        Je souhaite recevoir les actualités de CIA Invest
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="d-flex gap-3">
                                <button type="reset" class="btn btn-outline-secondary btn-lg flex-grow-1">
                                    <i class="bi bi-arrow-counterclockwise me-2"></i>Réinitialiser
                                </button>
                                <button type="submit" class="btn btn-primary btn-lg flex-grow-1">
                                    <i class="bi bi-send me-2"></i>Soumettre la candidature
                                </button>
                            </div>
                        </form>

                        <!-- Success Message (hidden by default) -->
                        <div id="successMessage" class="alert alert-success mt-4" style="display: none;">
                            <h5 class="alert-heading"><i class="bi bi-check-circle me-2"></i>Candidature envoyée avec succès !</h5>
                            <p class="mb-0">Merci pour votre intérêt. Notre équipe examinera votre candidature et vous contactera dans les plus brefs délais.</p>
                        </div>

                        <!-- Error Message (hidden by default) -->
                        <div id="errorMessage" class="alert alert-danger mt-4" style="display: none;">
                            <h5 class="alert-heading"><i class="bi bi-exclamation-triangle me-2"></i>Erreur</h5>
                            <p class="mb-0">Une erreur s'est produite lors de l'envoi de votre candidature. Veuillez réessayer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5">
    <div class="container">
        <div class="cta-wrapper" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="cta-title">Des questions sur le programme de partenariat ?</h2>
                    <p class="cta-description">Notre équipe est à votre disposition pour répondre à toutes vos questions</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="mailto:partenariats@cia-invest.com" class="btn btn-light btn-lg">
                        <i class="bi bi-envelope me-2"></i>Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for form handling -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('partnershipForm');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validate that at least one collaboration domain is selected
        const collaborationCheckboxes = document.querySelectorAll('input[name="collaboration[]"]:checked');
        if (collaborationCheckboxes.length === 0) {
            alert('Veuillez sélectionner au moins un domaine de collaboration.');
            return;
        }

        // Collect form data
        const formData = new FormData(form);

        // Here you would typically send the data to a server
        // For now, we'll just show a success message
        
        // Simulate form submission
        setTimeout(function() {
            // Hide error message if visible
            errorMessage.style.display = 'none';
            
            // Show success message
            successMessage.style.display = 'block';
            
            // Scroll to success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Reset form
            form.reset();
            
            // Hide success message after 5 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }, 1000);
    });

    // Add visual feedback for radio buttons
    const radioInputs = document.querySelectorAll('input[type="radio"][name="partnershipType"]');
    radioInputs.forEach(function(radio) {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.profile-card').forEach(function(card) {
                card.classList.remove('selected');
            });
            this.closest('.profile-card').classList.add('selected');
        });
    });

    // Initialize first radio selection
    if (radioInputs.length > 0) {
        radioInputs[0].closest('.profile-card').classList.add('selected');
    }
});
</script>

<?php
// Inclure le footer
include 'partials/footer.php';
?>
