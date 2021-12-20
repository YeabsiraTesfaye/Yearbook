<template>
    <div class="card">
            <div class="row m-0">
                <div class="col-12" style="height: 552px; overflow-y:scroll">
                    <div class="d-flex flex-column wraper card">
                        <strong class='card-header p-1'>Orientation</strong>
                        <select class='card-body p-0' id='orientation'>
                            <option value='potrait'>Potrait</option>
                            <option value='landscape'>Landscape</option>
                            <option value='square'>Square</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column wraper card">
                        <strong class='card-header p-1'>Page size</strong>
                        <select class='card-body p-0' name='pageSize'>
                            <option value=''>A3</option>
                            <option value=''>A4</option>
                            <option value=''>A5</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column wraper card pb-4">
                        <strong class='card-header p-1'>Photos per page</strong>
                        <select class='card-body p-0' name='photoCount'>
                            <option value='1'>1 persons'</option>
                            <option value='2'>2 persons'</option>
                            <option value='3'>3 persons'</option>
                            <option value='4'>4 persons'</option>
                            <option value='6'>6 persons'</option>
                            <option value='8'>8 persons'</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column wraper card">
                        <strong class='card-header p-1 bg-info text-white'>Font</strong>
                        <div class="card-body pt-1">
                            <div class="row card">
                                <strong class="card-header p-1 w-100">Font Family</strong>
                                <select class='card-body p-0 w-100' id='font'>
                                    <option value='Arial'>Arial</option>
                                    <option value='Arial Black'>Arial Black</option>
                                    <option value='Arial narrow'>Arial narrow</option>
                                    <option value='Arial Nova'>Arial Nova</option>
                                    <option value='Arial Rounded MT Bold'>Arial Rounded MT Bold</option>
                                    <option value='Arnoldboecklin'>Arnoldboecklin</option>
                                    <option value='Avanta Garde'>Avanta Garde</option>
                                    <option value='Bahnschrift'>Bahnschrift</option>
                                    <option value='Bahnschrift Light'>Bahnschrift Light</option>
                                    <option value='Bahnschrift SemiBold'>Bahnschrift SemiBold</option>
                                    <option value='Bahnschrift SemiLight'>Bahnschrift SemiLight</option>
                                    <option value='Baskerville'>Baskerville</option>
                                    <option value='Batang'>Batang</option>
                                    <option value='BatangChe'>BatangChe</option>
                                    <option value='Big Caslon'>Big Caslon</option>
                                    <option value='BIZ UDGothic'>BIZ UDGothic</option>
                                    <option value='BIZ UDMincho Medium'>BIZ UDMincho Medium</option>
                                    <option value='Blippo'>Blippo</option>
                                    <option value='Bodoni MT'>Bodoni MT</option>
                                    <option value='Book Antiqua'>Book Antiqua</option>
                                    <option value='Book Antiqua'>Book Antiqua</option>
                                    <option value='Bookman'>Bookman</option>
                                    <option value='Bradley Hand'>Bradley Hand</option>
                                    <option value='Browallia New'>Browallia New</option>
                                    <option value='BrowalliaUPC'>BrowalliaUPC</option>
                                    <option value='Brush Script MT'>Brush Script MT</option>
                                    <option value='Brush Script Std'>Brush Script Std</option>
                                    <option value='Brushstroke'>Brushstroke</option>
                                    <option value='Calibri'>Calibri</option>
                                    <option value='Calibri Light'>Calibri Light</option>
                                    <option value='Calisto MT'>Calisto MT</option>
                                    <option value='Cambodian'>Cambodian</option>
                                    <option value='Cambria'>Cambria</option>
                                    <option value='Cambria Math'>Cambria Math</option>
                                    <option value='Candara'>Candara</option>
                                    <option value='Century Gothic'>Century Gothic</option>
                                    <option value='Chalkduster'>Chalkduster</option>
                                    <option value='Cherokee'>Cherokee</option>
                                    <option value='Comic Sans'>Comic Sans</option>
                                    <option value='Comic Sans MS'>Comic Sans MS</option>
                                    <option value='Consolas'>Consolas</option>
                                    <option value='Constantia'>Constantia</option>
                                    <option value='Copperplate'>Copperplate</option>
                                    <option value='Copperplate Gothic Light'>Copperplate Gothic Light</option>
                                    <option value='Copperplate Gothic Bold'>Copperplate Gothic Bold</option>
                                    <option value='Corbel'>Corbel</option>
                                    <option value='Cordia New'>Cordia New</option>
                                    <option value='CordiaUPC'>CordiaUPC</option>
                                    <option value='Coronetscript'>Coronetscript</option>
                                    <option value='Courier'>Courier</option>
                                    <option value='Courier New'>Courier New</option>
                                    <option value='DaunPenh'>DaunPenh</option>
                                    <option value='David'>David</option>
                                    <option value='DengXian'>DengXian</option>
                                    <option value='DFKai-SB'>DFKai-SB</option>
                                    <option value='Didot'>Didot</option>
                                    <option value='DilleniaUPC'>DilleniaUPC</option>
                                    <option value='DokChampa'>DokChampa</option>
                                    <option value='Dotum'>Dotum</option>
                                    <option value='DotumChe'>DotumChe</option>
                                    <option value='Ebrima'>Ebrima</option>
                                    <option value='Estrangelo Edessa'>Estrangelo Edessa</option>
                                    <option value='EucrosiaUPC'>EucrosiaUPC</option>
                                    <option value='Euphemia'>Euphemia</option>
                                    <option value='FangSong'>FangSong</option>
                                    <option value='Florence'>Florence</option>
                                    <option value='Franklin Gothic Medium'>Franklin Gothic Medium</option>
                                    <option value='FrankRuehl'>FrankRuehl</option>
                                    <option value='FreesiaUPC'>FreesiaUPC</option>
                                    <option value='Futara'>Futara</option>
                                    <option value='Gabriola'>Gabriola</option>
                                    <option value='Gadugi'>Gadugi</option>
                                    <option value='Garamond'>Garamond</option>
                                    <option value='Gautami'>Gautami</option>
                                    <option value='Geneva'>Geneva</option>
                                    <option value='Georgia'>Georgia</option>
                                    <option value='Georgia Pro'>Georgia Pro</option>
                                    <option value='Gill Sans'>Gill Sans</option>
                                    <option value='Gill Sans Nova'>Gill Sans Nova</option>
                                    <option value='Gisha'>Gisha</option>
                                    <option value='Goudy Old Style'>Goudy Old Style</option>
                                    <option value='Gulim'>Gulim</option>
                                    <option value='GulimChe'>GulimChe</option>
                                    <option value='Gungsuh'>Gungsuh</option>
                                    <option value='GungsuhChe'>GungsuhChe</option>
                                    <option value='Hebrew'>Hebrew</option>
                                    <option value='Hoefler Text'>Hoefler Text</option>
                                    <option value='HoloLens MDL2 Assets'>HoloLens MDL2 Assets</option>
                                    <option value='Impact'>Impact</option>
                                    <option value='Ink Free'>Ink Free</option>
                                    <option value='IrisUPC'>IrisUPC</option>
                                    <option value='Iskoola Pota'>Iskoola Pota</option>
                                    <option value='Japanese'>Japanese</option>
                                    <option value='JasmineUPC'>JasmineUPC</option>
                                    <option value='Javanese Text'>Javanese Text</option>
                                    <option value='Jazz LET'>Jazz LET</option>
                                    <option value='KaiTi'>KaiTi</option>
                                    <option value='Kalinga'>Kalinga</option>
                                    <option value='Kartika'>Kartika</option>
                                    <option value='Khmer UI'>Khmer UI</option>
                                    <option value='KodchiangUPC'>KodchiangUPC</option>
                                    <option value='Kokila'>Kokila</option>
                                    <option value='Korean'>Korean</option>
                                    <option value='Lao'>Lao</option>
                                    <option value='Lao UI'>Lao UI</option>
                                    <option value='Latha'>Latha</option>
                                    <option value='Leelawadee'>Leelawadee</option>
                                    <option value='Leelawadee UI'>Leelawadee UI</option>
                                    <option value='Leelawadee UI Semilight'>Leelawadee UI Semilight</option>
                                    <option value='Levenim MT'>Levenim MT</option>
                                    <option value='LilyUPC'>LilyUPC</option>
                                    <option value='Lucida Bright'>Lucida Bright</option>
                                    <option value='Lucida Console'>Lucida Console</option>
                                    <option value='Lucida Handwriting'>Lucida Handwriting</option>
                                    <option value='Lucida Sans'>Lucida Sans</option>
                                    <option value='Lucida Sans Typewriter'>Lucida Sans Typewriter</option>
                                    <option value='Lucida Sans Unicode'>Lucida Sans Unicode</option>
                                    <option value='Lucidatypewriter'>Lucidatypewriter</option>
                                    <option value='Luminari'>Luminari</option>
                                    <option value='Malgun Gothic'>Malgun Gothic</option>
                                    <option value='Malgun Gothic Semilight'>Malgun Gothic Semilight</option>
                                    <option value='Mangal'>Mangal</option>
                                    <option value='Marker Felt'>Marker Felt</option>
                                    <option value='Marlett'>Marlett</option>
                                    <option value='Meiryo'>Meiryo</option>
                                    <option value='Meiryo UI'>Meiryo UI</option>
                                    <option value='Microsoft Himalaya'>Microsoft Himalaya</option>
                                    <option value='Microsoft JhengHei'>Microsoft JhengHei</option>
                                    <option value='Microsoft JhengHei UI'>Microsoft JhengHei UI</option>
                                    <option value='Microsoft New Tai Lue'>Microsoft New Tai Lue</option>
                                    <option value='Microsoft PhagsPa'>Microsoft PhagsPa</option>
                                    <option value='Microsoft Sans Serif'>Microsoft Sans Serif</option>
                                    <option value='Microsoft Tai Le'>Microsoft Tai Le</option>
                                    <option value='Microsoft Uighur'>Microsoft Uighur</option>
                                    <option value='Microsoft YaHei'>Microsoft YaHei</option>
                                    <option value='Microsoft YaHei UI'>Microsoft YaHei UI</option>
                                    <option value='Microsoft Yi Baiti'>Microsoft Yi Baiti</option>
                                    <option value='MingLiU'>MingLiU</option>
                                    <option value='MingLiU_HKSCS'>MingLiU_HKSCS</option>
                                    <option value='MingLiU_HKSCS-ExtB'>MingLiU_HKSCS-ExtB</option>
                                    <option value='MingLiU-ExtB'>MingLiU-ExtB</option>
                                    <option value='Miriam'>Miriam</option>
                                    <option value='Monaco'>Monaco</option>
                                    <option value='Mongolian Baiti'>Mongolian Baiti</option>
                                    <option value='MoolBoran'>MoolBoran</option>
                                    <option value='MS Gothic'>MS Gothic</option>
                                    <option value='MS Mincho'>MS Mincho</option>
                                    <option value='MS PGothic'>MS PGothic</option>
                                    <option value='MS PMincho'>MS PMincho</option>
                                    <option value='MS UI Gothic'>MS UI Gothic</option>
                                    <option value='MV Boli'>MV Boli</option>
                                    <option value='Myanmar Text'>Myanmar Text</option>
                                    <option value='Narkisim'>Narkisim</option>
                                    <option value='Neue Haas Grotesk Text Pro'>Neue Haas Grotesk Text Pro</option>
                                    <option value='New Century Schoolbook'>New Century Schoolbook</option>
                                    <option value='News Gothic MT'>News Gothic MT</option>
                                    <option value='Nirmala UI'>Nirmala UI</option>
                                    <option value='No automatic language associations'>No automatic language associations</option>
                                    <option value='Noto'>Noto</option>
                                    <option value='NSimSun'>NSimSun</option>
                                    <option value='Nyala'>Nyala</option>
                                    <option value='Oldtown'>Oldtown</option>
                                    <option value='Optima'>Optima</option>
                                    <option value='Palatino'>Palatino</option>
                                    <option value='Palatino Linotype'>Palatino Linotype</option>
                                    <option value='papyrus'>papyrus</option>
                                    <option value='Parkavenue'>Parkavenue</option>
                                    <option value='Perpetua'>Perpetua</option>
                                    <option value='Plantagenet Cherokee'>Plantagenet Cherokee</option>
                                    <option value='PMingLiU'>PMingLiU</option>
                                    <option value='Raavi'>Raavi</option>
                                    <option value='Rockwell'>Rockwell</option>
                                    <option value='Rockwell Extra Bold'>Rockwell Extra Bold</option>
                                    <option value='Rockwell Nova'>Rockwell Nova</option>
                                    <option value='Rockwell Nova Cond'>Rockwell Nova Cond</option>
                                    <option value='Rockwell Nova Extra Bold'>Rockwell Nova Extra Bold</option>
                                    <option value='Rod'>Rod</option>
                                    <option value='Sakkal Majalla'>Sakkal Majalla</option>
                                    <option value='Sanskrit Text'>Sanskrit Text</option>
                                    <option value='Segoe MDL2 Assets'>Segoe MDL2 Assets</option>
                                    <option value='Segoe Print'>Segoe Print</option>
                                    <option value='Segoe Script'>Segoe Script</option>
                                    <option value='Segoe UI'>Segoe UI</option>
                                    <option value='Segoe UI Emoji'>Segoe UI Emoji</option>
                                    <option value='Segoe UI Historic'>Segoe UI Historic</option>
                                    <option value='Segoe UI Symbol'>Segoe UI Symbol</option>
                                    <option value='Shonar Bangla'>Shonar Bangla</option>
                                    <option value='Shruti'>Shruti</option>
                                    <option value='SimHei'>SimHei</option>
                                    <option value='SimKai'>SimKai</option>
                                    <option value='Simplified Arabic'>Simplified Arabic</option>
                                    <option value='Simplified Chinese'>Simplified Chinese</option>
                                    <option value='SimSun'>SimSun</option>
                                    <option value='SimSun-ExtB'>SimSun-ExtB</option>
                                    <option value='Sitka'>Sitka</option>
                                    <option value='Snell Roundhan'>Snell Roundhan</option>
                                    <option value='Stencil Std'>Stencil Std</option>
                                    <option value='Sylfaen'>Sylfaen</option>
                                    <option value='Symbol'>Symbol</option>
                                    <option value='Tahoma'>Tahoma</option>
                                    <option value='Thai'>Thai</option>
                                    <option value='Times New Roman'>Times New Roman</option>
                                    <option value='Traditional Arabic'>Traditional Arabic</option>
                                    <option value='Traditional Chinese'>Traditional Chinese</option>
                                    <option value='Trattatello'>Trattatello</option>
                                    <option value='Trebuchet MS'>Trebuchet MS</option>
                                    <option value='Tunga'>Tunga</option>
                                    <option value='UD Digi Kyokasho'>UD Digi Kyokasho</option>
                                    <option value='UD Digi KyoKasho NK-R'>UD Digi KyoKasho NK-R</option>
                                    <option value='UD Digi KyoKasho NP-R'>UD Digi KyoKasho NP-R</option>
                                    <option value='UD Digi KyoKasho N-R'>UD Digi KyoKasho N-R</option>
                                    <option value='Urdu Typesetting'>Urdu Typesetting</option>
                                    <option value='URW Chancery'>URW Chancery</option>
                                    <option value='Utsaah'>Utsaah</option>
                                    <option value='Vani'>Vani</option>
                                    <option value='Verdana'>Verdana</option>
                                    <option value='Verdana Pro'>Verdana Pro</option>
                                    <option value='Vijaya'>Vijaya</option>
                                    <option value='Vrinda'>Vrinda</option>
                                    <option value='Webdings'>Webdings</option>
                                    <option value='Westminster'>Westminster</option>
                                    <option value='Wingdings'>Wingdings</option>
                                    <option value='Yu Gothic'>Yu Gothic</option>
                                    <option value='Yu Gothic UI'>	Yu Gothic UI</option>
                                    <option value='Yu Mincho'>	Yu Mincho</option>
                                    <option value='Zapf Chancery'>Zapf Chancery</option>
                                </select>
                            </div>
                            <div class="card row">
                                <strong class='card-header p-1'>Font size</strong>
                                    <input min="0" max="100" value="12" type="range" id = 'fontSize' class="form-control-range">
                            </div>
                            <div class="row card">
                                <strong class='card-header p-1'>Color</strong>
                                <input type="color" id="colorpicker" value="#000000" style="width:100%;">
                            </div>
                            <div class="row card">
                                <strong class='card-header p-1'>Style</strong>
                                <div class="row card-body p-1">
                                    <div class="col-4">
                                        <button id='b' class='style' value="bold" style="font-weight: bold;">B</button>
                                    </div> 
                                    <div class="col-4">    
                                        <button id='u' class='style' value="underline" style='text-decoration: underline;'>U</button>
                                    </div> 
                                    <div class="col-4">  
                                        <button id='i' class='style' value="italic" style="font-style: italic;">I</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column wraper card">
                        <strong class='card-header p-1 bg-info text-white'>Shadow</strong>
                        <div class="card-body pt-1">
                            <div class="row card">
                                <strong class='card-header p-0'>Color</strong>
                                <div class="card-body p-0">
                                    <input type="color" id="shadowColorPicker" value="#000000" style="width:100%;">
                                </div>
                            </div>
                            <div class="row card">
                                <strong class='card-header p-0'>Size</strong>
                                <div class="card-body p-0">
                                    <input min="0" max="100" value="0" type="range" id = 'shadowSize' class="form-control-range">
                                </div>
                            </div>
                            <div class="row card">
                                <strong class='card-header p-0'>Spread</strong>
                                <div class="card-body p-0">
                                    <input min="0" max="100" value="0" type="range" id = 'shadowHardness' class="form-control-range">
                                </div>
                            </div>
                            <div class="row card">
                                <strong class='card-header p-0'>Direction</strong>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4 p-0"><button style='width:100%; height:100%' id="up" class="btn btn-secondary shadow-btn">up</button></div>
                                        <div class="col-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 p-0"><button style='width:100%; height:100%' id="left" class="btn btn-secondary shadow-btn">left</button></div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4 p-0 text-center">
                                                    <small>X: </small>
                                                </div>
                                                <div class="col-8 p-0 text-center">
                                                    <input style="width:100%; border:none" id='x' type='number'/>
                                                </div>
                                                
                                                <div class="col-4 p-0 text-center">
                                                    <small>Y: </small>
                                                </div>
                                                <div class="col-8 p-0 text-center">
                                                    <input style="width:100%; border:none" id='y' type='number'/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-3 p-0"><button style='width:100%; height:100%' id="right" class="btn btn-secondary shadow-btn">right</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4 p-0"><button style='width:100%; height:100%' id="down" class="btn btn-secondary shadow-btn">down</button></div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
export default {
    
    data(){
        return{
            
        }
    },
    methods:{
        
    }
}
</script>
<style scoped>
    .style{
        border:none;
        background-color: #ffffff;
        border-radius: 5px;
    }
</style>