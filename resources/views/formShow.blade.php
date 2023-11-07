<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Detail</title>
</head>
<body>
    <div class="container" id="container">
        <!-- header -->
        <header>
            <div class="kiri">
                <img src="/img/logolmi.png" alt="">
                <div>
                    <b><p class="judul">FORM EVALUASI AMIL</p></b>
                    <b><p class="judul">MASA PERJANJIAN KERJA WAKTU TERTENTU</p></b>
                </div>
            </div>
            <div class="kanan">
                <p class="badge">LMI/FR-SOP.DKU.24-02</p>
            </div>
        </header>
        <!-- table -->
        <div class="row">
            <div class="col-1">Nama:</div>
            <div class="col-2"><input type="text" name="nama" value="{{ $form->nama }}" disabled></div>
        </div>
        <div class="row">
            <div class="col-1">NIP:</div>
            <div class="col-2"><input type="number" name="nip" value="{{ $form->nip }}" disabled></div>
        </div>
        <div class="row">
            <div class="col-1">Posisi/Jabatan:</div>
            <div class="col-2"><input type="text" name="posisi" value="{{ $form->posisi }}" disabled></div>
        </div>
        <div class="row">
            <div class="col-1">Direktorat/Departemen/Perwakilan:</div>
            <div class="col-2"><input type="text" name="direktorat" value="{{ $form->direktorat }}" disabled></div>
        </div>
        <div class="row">
            <div class="col-1">Tanggal Masuk Kerja:</div>
            <div class="col-2"><input type="date" name="tgl_masuk" value="{{ $form->tgl_masuk }}" disabled></div>
        </div>
        <div class="row">
            <div class="col-1">Periode Masa Perjanjian Kerja:</div>
            <div class="col-2">
                <select name="periode" id="periode" disabled>
                    <option value="">Pilih Periode</option>
                    <option value="3 bulan" {{ $form->periode === '3 bulan' ? 'selected' : '' }}>3 Bulan</option>
                    <option value="6 bulan" {{ $form->periode === '6 bulan' ? 'selected' : '' }}>6 Bulan</option>
                    <option value="1 tahun" {{ $form->periode === '1 tahun' ? 'selected' : '' }}>1 Tahun</option>
                    <option value="2 tahun" {{ $form->periode === '2 tahun' ? 'selected' : '' }}>2 Tahun</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-1">Atasan Langsung:</div>
            <div class="col-2"> <input type="text" name="atasan" value="{{ $form->atasan }}" disabled>
            	
            </div>
        </div>
        
		<br>
		Di Isi Oleh Atasan Langsung 
		
        <div class="row mt">
            <div class="col-3 top"><b>Indikator Evaluasi</b></div>
            <div class="col-4 top"><b>Skor</b></div>
        </div>
        <div class="row">
            <div class="col-3">1. Kualitas kerja secara umum</div>
            <div class="col-4">
                <select name="skor_1" id="skor_1" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_1 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_1 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_1 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_1 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_1 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">2. Keajegan/konsistensi kualitas kerja</div>
            <div class="col-4">
                <select name="skor_2" id="skor_2" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_2 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_2 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_2 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_2 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_2 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">3. Pengetahuan terhadap pekerjaan</div>
            <div class="col-4">
                <select name="skor_3" id="skor_3" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_3 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_3 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_3 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_3 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_3 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">4. Kemampuan komunikasi</div>
            <div class="col-4">
                <select name="skor_4" id="skor_4" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_4 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_4 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_4 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_4 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_4 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">5. Kepribadian</div>
            <div class="col-4">
                <select name="skor_5" id="skor_5" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_5 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_5 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_5 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_5 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_5 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">6. Kemampuan manajerial</div>
            <div class="col-4">
                <select name="skor_6" id="skor_6" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_6 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_6 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_6 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_6 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_6 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">7. Kontribusi terhadap Tim</div>
            <div class="col-4">
                <select name="skor_7" id="skor_7" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_7 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_7 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_7 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_7 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_7 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">8. Produktivitas</div>
            <div class="col-4">
                <select name="skor_8" id="skor_8" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_8 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_8 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_8 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_8 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_8 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-3">9. Pencapaian target kerja</div>
            <div class="col-4">
                <select name="skor_9" id="skor_9" disabled>
                    <option value="">Pilih Skor</option>
                    <option value="5" {{ $form->skor_9 === '5' ? 'selected' : '' }}>5 (Luar Biasa)</option>
                    <option value="4" {{ $form->skor_9 === '4' ? 'selected' : '' }}>4 (Memuaskan)</option>
                    <option value="3" {{ $form->skor_9 === '3' ? 'selected' : '' }}>3 (Baik)</option>
                    <option value="2" {{ $form->skor_9 === '2' ? 'selected' : '' }}>2 (Perlu Ditingkatkan)</option>
                    <option value="1" {{ $form->skor_9 === '1' ? 'selected' : '' }}>1 (Kinerja Baik)</option>
                </select>
            </div>
        </div>
		<br>

		Di Isi Oleh Atasan Langsung 
		
        <div class="row-header"><h3>Rangkuman Kinerja (Performance Summary)</h2></div>
        <div class="col-5">Aspek apa saja yang paling menonjol/paling dikuasai oleh Amil?</div>
        <div class="col-6"><textarea name="view_atasan_1" id="view_atasan_1" placeholder="Isi disini..." disabled="true">{{ $form->view_atasan_1 }}</textarea></div>
        <div class="col-5">Aspek apa saja yang menjadi kelebihan/kekuatan Amil?</div>
        <div class="col-6"><textarea name="view_atasan_2" id="view_atasan_2" placeholder="Isi disini..." disabled="true">{{ $form->view_atasan_2 }}</textarea></div>
        <div class="col-5">Aspek apa saja yang menjadi kekurangan/kelemahan Amil?</div>
        <div class="col-6"><textarea name="view_atasan_3" id="view_atasan_3" placeholder="Isi disini..." disabled="true">{{ $form->view_atasan_3 }}</textarea></div>
        <div class="col-5">Bagaimana kinerja amil atas target pekerjaan yang diberikan?</div>
        <div class="col-6"><textarea name="view_atasan_4" id="view_atasan_4" placeholder="Isi disini..." disabled="true">{{ $form->view_atasan_4 }}</textarea></div>
        <div class="col-5">Apa yang dapat Amil lakukan untuk meningkatkan kompetensi dan efektifitas kerja?</div>
        <div class="col-6"><textarea name="view_atasan_5" id="view_atasan_5" placeholder="Isi disini..." disabled="true">{{ $form->view_atasan_5 }}</textarea></div>
        <div class="col-5">Pelatihan tambahan apa yang dapat bermanfaat bagi Amil?</div>
        <div class="col-6"><textarea name="view_atasan_6" id="view_atasan_6" placeholder="Isi disini..." disabled="true">{{ $form->view_atasan_6 }}</textarea></div>
        <div class="row">
            <div class="col-1">Rekomendasi:</div>
            <div class="col-2">
                <select name="view_atasan_7" id="view_atasan_7" disabled>
                    <option value="">Pilih rekomendasi</option>
                    <option value="diperbarui" {{ $form->view_atasan_7 === 'diperbarui' ? 'selected' : '' }}>Kontrak diperbarui</option>
                    <option value="dihentikan" {{ $form->view_atasan_7 === 'dihentikan' ? 'selected' : '' }}>Kontrak dihentikan</option>
                </select>
            </div>
        </div>

		<br>
		Di Isi Oleh Amil yang Bersangkutan

        <div class="row-header"><h3>Sudut Pandang Amil (Employee Point of View)*</h2></div>
        <div class="col-5">Prestasi/pencapaian apa saja yang sudah Anda lakukan selama periode kerja ini?</div>
        <div class="col-6"><textarea name="view_amil_1" id="view_amil_1" placeholder="Isi disini..." disabled="true">{{ $form->view_amil_1 }}</textarea></div>
        <div class="col-5">Aspek apakah yang menjadi kelemahan Anda dan bagaimana Anda akan melakukan perbaikan?</div>
        <div class="col-6"><textarea name="view_amil_2" id="view_amil_2" placeholder="Isi disini..." disabled="true">{{ $form->view_amil_2 }}</textarea></div>
        <div class="col-5">Apa kelebihan dan kelemahan Atasan langsung Anda?</div>
        <div class="col-6"><textarea name="view_amil_3" id="view_amil_3" placeholder="Isi disini..." disabled="true">{{ $form->view_amil_3 }}</textarea></div>
        <div class="col-5">Hal-hal lain yang dapat didiskusikan lebih lanjut :</div>
        <div class="col-6"><textarea name="view_amil_4" id="view_amil_4" placeholder="Isi disini..." disabled="true">{{ $form->view_amil_4 }}</textarea></div>

        
        <div class="row mt">
            <div class="col-ttd">
                <div class="col-ttd-top">Tanda tangan Atasan Langsung</div>
                <div class="col-ttd-mid">
                    <input type="hidden" name="old_ttd_atasan" value="{{ $form->ttd_atasan }}">
                    {{-- <input name="ttd_atasan" type="file" id="ttd_atasan" onchange="previewImageAtasan()"> --}}
                    @if ($form->ttd_atasan)
                        <img src="{{ asset('storage/' . $form->ttd_atasan) }}" class="img-preview-atasan img-fluid d-block" style="width:100%; height:100%;">
                    @else    
                        <img class="img-preview-atasan img-fluid"  style="width:100%; height:100%;">
                    @endif
                    <br>
                </div>
                <div class="col-ttd-bot">
                   <div class="text-small"><p>Tanggal: </p></div>
                   <div class="col-date"><input id="ttd_atasan_tgl" name="ttd_atasan_tgl" type="date" value={{ $form->ttd_atasan_tgl }} disabled></div>
                </div>
            </div>
            <div class="col-ttd">
                <div class="col-ttd-top">Tanda tangan Amil Ybs</div>
                <div class="col-ttd-mid">
                    <input type="hidden" name="old_ttd_amil" value="{{ $form->ttd_amil }}">
                    {{-- <input name="ttd_amil" type="file" id="ttd_amil" onchange="previewImageAmil()" disabled> --}}
                    @if ($form->ttd_amil)
                        <img src="{{ asset('storage/' . $form->ttd_amil) }}" class="img-preview-amil img-fluid d-block" style="width:100%; height:100%;">
                    @else    
                        <img class="img-preview-amil img-fluid"  style="width:100%; height:100%;">
                    @endif
                    <br>
                </div>
                <div class="col-ttd-bot">
                   <div class="text-small"><p>Tanggal: </p></div>
                   <div class="col-date"><input id="ttd_amil_tgl" name="ttd_amil_tgl" type="date" value={{ $form->ttd_amil_tgl }} disabled></div>
                </div>
            </div>
            <div class="col-ttd">
                <div class="col-ttd-top" disabled="">Tanda tangan Manajer SDM</div>
                <div class="col-ttd-mid"><input name="" type="file" disabled=""></div>
                <div class="col-ttd-bot">
                   <div class="text-small" disabled=""><p>Tanggal: </p></div>
                   <div class="col-date"><input type="date" disabled="" value={{ $form->ttd_manajer_tgl }}></div>
                </div>
            </div>
        </div>

        <button class="btn-cetak mt" id="cetak">Konversi ke PDF</button>
    </div>
    <!-- script print pdf -->
    <script>
        window.onload = function() {
            document.getElementById("cetak")
            .addEventListener("click", () => {
                const container = this.document.getElementById("container");
                var opt = {
                    margin: 1,
                    filename: 'myfile.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                };
                html2pdf().from(container).save();
            })
        }
    </script>
</body>
</html>