<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Examen extends CI_Controller
{
    private $_table = TABLE_EXAMEN;
    private $_formAdd = __DIR_EXAMEN__ . 'examen';

    function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');
    }

    /*
        View page of project
      */
    public function index()
    {
        $this->showFormAdd();
    }

    /* Load form */
    function showFormAdd()
    {
        $this->theme->set_titre("Examen");
        $this->load->view($this->_formAdd);
    }

    public function saveData()
    {
        if (!$this->input->is_ajax_request()) {
            exit('Requested URL is not valid');
        }
        $this->form_validation->set_rules('formNames', 'Nom', 'max_length[200]|required');
        $this->form_validation->set_rules('formFirst', 'Prénoms', 'max_length[200]');
        $this->form_validation->set_rules('formCourse', 'Parcours', 'min_length[4]|max_length[4]|required');
        $this->form_validation->set_rules('formRegist', 'Matricule', 'required|max_length[15]|is_unique[examen.registration]');
        $this->form_validation->set_rules('formNote', 'Note', 'required|numeric|less_than_equal_to[10]');
        if ($this->form_validation->run() == TRUE) {
            $dataToSave = [
                'last_name' => $this->input->post('formNames'),
                'first_names' => $this->input->post('formFirst') ?: null,
                'score' => $this->input->post('formNote'),
                'registration' => $this->input->post('formRegist'),
                'parcours' => $this->input->post('formCourse'),
                'ip_address' => _MY_IP_,
                'recorded_at' => _DATETIME_
            ];
            // Sauvegarde des données de l'étudiant
            $this->statics->addRecord($this->_table, $dataToSave);
            echo 'success';
        } else {
            // Retourner les erreurs de validation du formulaire
            echo json_encode($this->form_validation->error_array());
        }
    }
}
