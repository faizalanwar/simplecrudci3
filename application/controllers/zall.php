<?php
    class Zall extends CI_Controller{
        public function index(){
            $this->load->model('m_mhs');
            $data['mahasiswa']=$this->m_mhs->get_data();
            $this->load->view('v_mhs',$data);
                
        }
        
        public function tambah_aksi()
        {
            $nrp = $this->input->post('nrp');
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $kelas = $this->input->post('kelas');
            $foto = $_FILES['foto'];
            if($foto=''){}else{
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png|gif';
                $this->load->library('upload');
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('foto')){
                    echo "upload gagal";die();
                }else{
                    $foto=$this->upload->data('file_name');
                }
            }
            $data = array (
                'nrp' => $nrp,
                'nama' => $nama,
                'jurusan' => $jurusan,
                'kelas' => $kelas,
                'foto' => $foto
            );
            $this->m_mhs->input_data($data,'mahasiswa');
            redirect('http://localhost/crudci/zall');
        }

        public function delete_data($id){
            
            $where = array('id' => $id);
            $table= 'mahasiswa';  
            $this->m_mhs->delete_data($where,$table);
            redirect('http://localhost/crudci/zall');
        }

        public function update_data($id){
            $where = array('id' => $id);
            $table= 'mahasiswa';  
            $data['mahasiswa']=$this->m_mhs->edit_data($where,$table)->result();
            $this->load->view('v_edit',$data);
                
        }
    
        public function update(){
            $id = $this->input->post('id');
            $nrp = $this->input->post('nrp');
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $kelas = $this->input->post('kelas');
            $foto = $_FILES['foto'];
            if($foto=''){}else{
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png|gif';
                $this->load->library('upload');
                $this->upload->initialize($config);
                if($this->upload->do_upload('foto')){
                    $foto=$this->upload->data('file_name');
                    $data = array (
                        'nrp' => $nrp,
                        'nama' => $nama,
                        'jurusan' => $jurusan,
                        'kelas' => $kelas,
                        'foto' => $foto
                    );
                    
                    $where = array('id' => $id);
                    
                    $this->m_mhs->update_data($where,$data,'mahasiswa');
                    redirect('http://localhost/crudci/zall');
                }else{
                    $data = array (
                        'nrp' => $nrp,
                        'nama' => $nama,
                        'jurusan' => $jurusan,
                        'kelas' => $kelas,
                    );
                    
                    $where = array('id' => $id);
                    
                    $this->m_mhs->update_data($where,$data,'mahasiswa');
                    redirect('http://localhost/crudci/zall');
                }
            }
          
        }

                 
    
    }

    

?>


	