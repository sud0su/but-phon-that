<div class="data-content">
    <form>
        <label>Bidang</label>
        <div class="form">
            <select id="bidang">
                <option>--Pilih Bidang</option>
                <?php
                $bidang = $this->db->query('select * from master.m_bidang');
                foreach ($bidang->result() as $bid) {
                    ?>
                    <option value="<?php echo $bid->kd_bidang; ?>"><?php echo $bid->nama_bidang; ?></option>
                <?php } ?>
            </select>
        </div>
        <label>Kasus</label>
        <div class="form">
            <select class="optKasus" id="kasus">
                <option>--Pilih Kasus--</option>
            </select>
        </div>
        <label>Semester</label>
        <div class="form">
            <select id="smester">
                <option>--Pilih Semester--</option>
                <option value="2">Genap</option>
                <option value="1">Ganjil</option>
            </select>
        </div>
        <label>Tahun</label>
        <div class="form">
            <input type="text" name="txtFromYear" id="txtYear" class="date-picker-year"/>
        </div>

        <button type="button" class="tambah">Tambah Data</button>
    </form>

    <div id="dataTable">
        <div id="loading"></div>
    </div>
</div>

<div id="tambahKasus" style="display:none;" class="dialog_window">
    <table style="font-size: 11px;">
        <tr>
            <td>Bidang</td><td>:</td><td><span class="ketBid"></span></td>
        </tr>
        <tr>
            <td>Kasus</td><td>:</td><td><span class="ketKas"></span></td>
        </tr>
        <tr>
            <td>Semester</td><td>:</td><td><span class="ketSme"></span></td>
        </tr>
        <tr>
            <td>Tahun</td><td>:</td><td><span class="ketThn"></span></td>
        </tr>
    </table>
    
    <div id="form"></div>
    
<button id="AddCol" type="button">Tambah Column</button>
<button id="hpsCol" type="button">Hapus Column</button>

</div>
<script src="gudang/app_js/kasus.js"></script>