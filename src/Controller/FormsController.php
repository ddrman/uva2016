<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Forms Controller
 *
 * @property \App\Model\Table\FormsTable $Forms
 */
class FormsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $forms = $this->paginate($this->Forms);

        $this->set(compact('forms'));
        $this->set('_serialize', ['forms']);
    }

    /**
     * View method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $form = $this->Forms->get($id, [
            'contain' => []
        ]);

        $this->set('form', $form);
        $this->set('_serialize', ['form']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $form = $this->Forms->newEntity();
        if ($this->request->is('post')) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('El formulario ha sido guardado'));
                return $this->redirect(['controller' => 'Forms', 'action' => 'add', 'home']);
            } else {
                $this->Flash->error(__('El formulario no ha podido ser guardado, inténtalo de nuevo'));
            }
        }
        $this->set(compact('form'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $form = $this->Forms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('El formulario de guardado correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El formulario no se ha podido registrar, intentelo de nuevo.'));
            }
        }
        $this->set(compact('form'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $form = $this->Forms->get($id);
        if ($this->Forms->delete($form)) {
            $this->Flash->success(__('El formulario ha sido borrado.'));
        } else {
            $this->Flash->error(__('El formulario no ha podido ser borrado, inténtelo de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }

        //Función par axportar en excel
    public function export() {
        $this->response->download('export.csv');
        $data = $this->Forms->find('all')->toArray();
        $_serialize = 'data';
        $_delimiter = chr(9);
        $_enclosure = '"';
        $_newline = '\r\n';
        $_eol = '~';
        $_bom = true;
        $_extract = ['id', 'nombre', 'apellidos', 'tipo_doc', 'doc', 'email', 'sexo', 'fecha',
        'telefonomov', 'telefnofij', 'direccion', 'localidad', 'cod_postal', 'nacionalidad',
        'nivel_estudios', 'estud_cursa', 'centro_estud', 'idiomas', 'estud_reali', 'centro_estud_reali',
        'profesion', 'lugar_trabajo'];
        $this->set(compact('data', '_serialize', '_delimiter', '_enclosure', '_newline', '_eol', '_bom','_extract'));
        $this->viewBuilder()->className('CsvView.Csv');
        return;
    }
    
}
