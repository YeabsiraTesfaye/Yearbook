<template>
    <div class="card">
        <strong class="card-header p-2 pl-0 pl-4">
            Attributes
        </strong>
        <div class="card-body">
            <div class="row">
                <div class="col-3 p-0 pr-3" style="height: 506px; overflow-y:scroll">
                    <div class="d-flex flex-column wraper card">
                        <strong class='card-header p-1'>Orientation</strong>
                        <select @change="setOrientation" class='card-body p-0' id='orientation'>
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
                            <option value=''>A6</option>
                            <option value=''></option>
                        </select>
                    </div>
                    <div class="d-flex flex-column wraper card pb-4">
                        <strong class='card-header p-1'>Photos per page</strong>
                        <select @change="setNumberOfPhotosPerPage" class='card-body p-0' name='photoCount'>
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
                                <select @change="setFont" class='card-body p-0 w-100' id='font'>
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
                                    <input @input="setFontSize" min="0" max="100" value="12" type="range" id = 'fontSize' class="form-control-range">
                            </div>
                            <div class="row card">
                                <strong class='card-header p-1'>Color</strong>
                                <input type="color" id="colorpicker" @input="setColor" value="#000000" style="width:100%;">
                            </div>
                            <div class="row card">
                                <strong class='card-header p-1'>Style</strong>
                                <div class="row card-body p-1">
                                    <div class="col-4">
                                        <button @click='setStyle' id='b' class='style' value="bold" style="font-weight: bold;">B</button>
                                    </div> 
                                    <div class="col-4">    
                                        <button @click='setStyle' id='u' class='style' value="underline" style='text-decoration: underline;'>U</button>
                                    </div> 
                                    <div class="col-4">  
                                        <button @click='setStyle' id='i' class='style' value="italic" style="font-style: italic;">I</button>
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
                                    <input type="color" id="shadowColorPicker" @input="setShadowColor" value="#000000" style="width:100%;">
                                </div>
                            </div>
                            <div class="row card">
                                <strong class='card-header p-0'>Size</strong>
                                <div class="card-body p-0">
                                    <input @input="setShadowSize" min="0" max="100" value="0" type="range" id = 'shadowSize' class="form-control-range">
                                </div>
                            </div>
                            <div class="row card">
                                <strong class='card-header p-0'>Spread</strong>
                                <div class="card-body p-0">
                                    <input @input="setShadowHardness" min="0" max="100" value="0" type="range" id = 'shadowHardness' class="form-control-range">
                                </div>
                            </div>
                            <div class="row card">
                                <strong class='card-header p-0'>Direction</strong>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4 p-0"><button style='width:100%; height:100%' @click="setShadow" id="up" class="btn btn-secondary shadow-btn">&#8593;</button></div>
                                        <div class="col-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 p-0"><button style='width:100%; height:100%' @click="setShadow" id="left" class="btn btn-secondary shadow-btn">&#8592;</button></div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-4 p-0 text-center">
                                                    <small>X: </small>
                                                </div>
                                                <div class="col-8 p-0 text-center">
                                                    <input style="width:100%; border:none" id='x' @change="setShadowAtKeypress" v-bind:value="xVal" type='number'/>
                                                </div>
                                                
                                                <div class="col-4 p-0 text-center">
                                                    <small>Y: </small>
                                                </div>
                                                <div class="col-8 p-0 text-center">
                                                    <input style="width:100%; border:none" id='y' @change="setShadowAtKeypress" v-bind:value="yVal" type='number'/>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-3 p-0"><button style='width:100%; height:100%' @click="setShadow" id="right" class="btn btn-secondary shadow-btn">&#8594;</button></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4 p-0"><button style='width:100%; height:100%' @click="setShadow" id="down" class="btn btn-secondary shadow-btn">&#8595;</button></div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="col-9 p-0 d-flex flex-column">
                    <div class="wraper card">
                        <div class="card-header"><strong>Make Design</strong> <button class="btn btn-primary float-right" @click='exportAlbum'>Done</button></div>
                        <div class="card-body row justify-content-center d-flex w-100 pr-0">
                            <div @click="clean" id="potrait" class="card border align-self-center" style='width:51%; height:406px;'>
                                <div @click="check" id="image-1p" class="draggable resizableHW card" style='background-image:url("/storage/uploads/editor.png"); background-repeat: no-repeat; background-size: contain;' >   
                                    <img @error="goBack" :src= frame id='frame-p1' class='w-100 h-100' alt="">    
                                </div>
                                <br>  
                                <div @click="check" id="image-2p" class="draggable resizableHW card" style='background-image:url("/storage/uploads/editor.png"); background-repeat: no-repeat; background-size: contain;'>   
                                    <img @error="goBack" :src= frame id='frame-p2' class='w-100 h-100' alt="">
                                    <button class="delete"><strong>X</strong></button>
                                </div>
                                <strong @click="check" id='name' class='draggable resizable p-0 selectable' >Student name</strong>
                                <strong @click="check" id=lastword class='draggable resizable p-0 selectable' >Lastword</strong>
                            </div>
                            <div id="landscape" class="card border resizable" style='height:11cm; width:10.87cm;'>
                                <div class="card-header">
                                    <strong>Landscape</strong>
                                    
                                </div>
                                <div class="card-body p-0">
                                    <div @click="check" id="image-1l" class="draggable resizableHW card" >   
                                        <strong class="card-header">Image 1</strong>  
                                    </div><br>  
                                    <div @click="check" id="image-2l" class="draggable resizableHW card" >   
                                        <strong class="card-header">Image 2</strong>  
                                        <button class="delete"><strong>X</strong></button>
                                    </div>
                                    <strong @click="check" id='name' class='draggable resizable p-0 selectable' >Student name</strong>
                                    <strong @click="check" id='lastword' class='draggable resizable p-0 selectable' >Lastword</strong>
                                </div>
                            </div>
                            <div id="square" class="card border resizable" style='height:11cm; width:10.87cm;'>
                                <div class="card-header">
                                    <strong>Square</strong>
                                    
                                </div>
                                <div class="card-body p-0">
                                    <div @click="check" id="image-1s" class="draggable resizableHW card" >   
                                        <strong class="card-header">Image 1</strong>  
                                    </div><br>  
                                    <div @click="check" id="image-2s" class="draggable resizableHW card" >   
                                        <strong class="card-header">Image 2</strong>  
                                        <button class="delete"><strong>X</strong></button>
                                    </div>
                                    <strong @click="check" id='name' class='draggable resizable p-0 selectable' >Student name</strong>
                                    <strong @click="check" id='lastword' class='draggable resizable p-0 selectable' >Lastword</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row p-3">
                      <div class="col-12 d-flex flex-column wraper card ">
                        <strong class='card-header p-1'>Set background</strong>
                        <ul id='departments'>
                            <li>
                                <div class="d-flex row mb-1 mt-1">
                                    <div class="col-4">
                                        <strong class='text-info'>For the whole document</strong>
                                    </div>
                                    <div class="col-8">
                                        <input type='file'>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li v-for='department in departments.replace("[","").replace("]","").replaceAll("\"","").split(",")' :key='department'>
                            <div class="d-flex row mb-1 mt-1">
                                <div class="col-4">
                                    <strong>{{department}}</strong>
                                </div>
                                <div class="col-8">
                                    <input type='file' :name="department">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>  -->
        </div>
    </div>
</template>
<style scoped>

    #image-1p{ 
        width: 55.1361%;
        height: 81.6446%;
        inset: 2% 5em 5em 2%;
    }
    #image-2p{ 
        height: 59.6149%;
        width: 41.0304%;
        left: 57.0274%;
        top: 38.3813%;
    }
    #image-1l,#image-2l{ 
        height: 188.9764px;
        width: 269.86px;
    }
    
    #name{
        left: 16px;
        top: 333px;
    }
    #lastword{
        left: 16px;
        top: 360.625px;
    }

    #image-1l{
        left: 16px;
        top: 64px;
        width: 282.817px;
        height: 192.569px;
    }
    #image-2l{
        left: 175.703px;
        top: 255.672px;
        width: 217.305px;
        height: 142.334px;
    }

    #image-1s{
        left: 16px;
        top: 64px;
        width: 190px;
        height: 190px;
    }
    #image-2s{
        left: 204.688px;
        top: 207.672px;
        width: 190px;
        height: 190px;
    }
    
    .draggable{
        position: absolute;    
        padding: 0.5em;
        margin: 0;
        cursor:grab;
        padding:0
    }
    .delete{
        position: absolute;
        right: 0px;
        top:0px;
        border: none;
        border-radius: 50%;
        background: none;
        text-shadow: 0px 0px 5px black;
        color: white;
    }
    .delete:hover{
        background-color: 0px 0px 5px;
    }
    #landscape{
        display: none;
        overflow: hidden;
    }
    #square{
        display: none;
        overflow: hidden;
    }
    #potrait{
        overflow: hidden;
    }
    .style{
        border:none;
        background-color: #ffffff;
        border-radius: 5px;
    }
    .shadow-btn{
        width:100%;
    }
</style>
<script>
export default ({
    props:['departments','yearbookId'],
    data(){
        return{
            selected :'',
            boxShadow:{
                shadowColor:'',
                shadowX:0,
                shadowY:0,
                shadowHardness:0,
                shadowSize:0
            },
            textShadow:{
                shadowColor:'',
                shadowX:0,
                shadowY:0,
                shadowSize:0
            },
            frame:'',
            class:'col-12'
        }
    },
    mounted(){
        $( ".draggable" ).draggable({
            containment:'parent',
            stop: function(){
                let l = (100 * parseFloat($(this).position().left/parseFloat($(this).parent().width())))+'%'
                let t = (100 * parseFloat($(this).position().top/parseFloat($(this).parent().height())))+'%'
                $(this).css('left',l)
                $(this).css('top',t)
            }
        })
        $( ".resizableHW" ).resizable({
            aspectRatio:true,
            resize: function(e, ui){
                var parent = ui.element.parent();
                ui.element.css('height', ui.element.height()/parent.height()*100+'%');
                ui.element.css('width', ui.element.width()/parent.width()*100+'%');
            }
        })
        $( ".resizable" ).resizable()
        $('.delete').click(function(){
            $(this).parent().remove()
        })
        $('.card-body').find('#name').css("font-family",'Segoe Script')
        $('.card-body').find('#lastword').css("font-family",'Segoe Script')
        $('#font').val('Segoe Script'.replaceAll('"','').trim())

    }, methods:{
        check(e){
            if(this.selected){
                if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                    if(this.selected.attr('id') != e.target.id || this.selected.attr('id') == this.selected.parent().parent().attr('id')){
                        this.selected.css('border','none')
                    }
                }else{
                    if(this.selected.attr('id') != e.target.id || this.selected.attr('id') == this.selected.parent().parent().attr('id')){
                        this.selected.css('border-color','rgba(0,0,0,.125)')
                    }
                }
            }
            const selected = e.target.id
            const id = $('#orientation option:selected').text()
            this.selected = $('#'+id.toLowerCase()).find('#'+selected)
            if(this.selected.attr('id')!='name' || this.selected.attr('id')!='lastword'){
                this.selected.css('border','1px solid gold')
            }else{
                this.selected.css('border-color','gold')
            }
            if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                $('#fontSize').val(parseInt($('#'+id.toLowerCase()).find('#'+selected).css("font-size")))
                $('#colorpicker').val(this.RGBToHex($('#'+id.toLowerCase()).find('#'+selected).css("color")))
                if($('#'+id.toLowerCase()).find('#'+selected).css("font-weight") == 700){
                    $('#b').css('background-color', '#3490dc')
                    $('#b').css('color', '#ffffff')
                }
                else{
                    $('#b').css('background-color', '#ffffff')
                    $('#b').css('color', '#000000')
                }

                if($('#'+id.toLowerCase()).find('#'+selected).css("text-decoration").includes('underline')){
                    $('#u').css('background-color', '#3490dc')
                    $('#u').css('color', '#ffffff')
                }
                else{
                    $('#u').css('background-color', '#ffffff')
                    $('#u').css('color', '#000000')
                }

                if($('#'+id.toLowerCase()).find('#'+selected).css("font-weight").includes('italic')){
                    $('#i').css('background-color', '#3490dc')
                    $('#i').css('color', '#ffffff')
                }
                else{
                    $('#i').css('background-color', '#ffffff')
                    $('#i').css('color', '#000000')
                }
                
                const shadow = this.selected.css('text-shadow')
                if(shadow != 'none'){
                    const shadowArray = shadow.split(' ')
                    this.textShadow.shadowX = parseInt(shadowArray[shadowArray.length-3].replace('px',''))
                    this.textShadow.shadowY = parseInt(shadowArray[shadowArray.length-2].replace('px',''))
                    this.textShadow.shadowSize = parseInt(shadowArray[shadowArray.length-1].replace('px',''))
                    this.textShadow.shadowColor = this.RGBToHex(shadowArray.splice(0,3).join(''))
                    $('#shadowSize').val(parseInt(shadowArray[shadowArray.length-1].replace('px','')))
                    $('#shadowColorPicker').val(this.RGBToHex(shadowArray.splice(0,3).join('')))

                }
                else{
                    this.textShadow.shadowColor = '#000000'
                    this.textShadow.shadowX = 0
                    this.textShadow.shadowY = 0
                    this.textShadow.shadowSize = 0
                    
                    $('#shadowSize').val('0')
                    $('#shadowColorPicker').val('#000000')

                }
                this.shadowX = this.textShadow.shadowX
                this.shadowY = this.textShadow.shadowY
                $('#colorpicker').attr('disabled',false)
                $('#font').attr('disabled',false)
                $('#fontSize').attr('disabled',false)
                $('#shadowHardness').attr('disabled',true)

            }else{
                
                $('#b').css('background-color', '#ffffff')
                $('#b').css('color', '#000000')

                $('#u').css('background-color', '#ffffff')
                $('#u').css('color', '#000000')

                $('#i').css('background-color', '#ffffff')
                $('#i').css('color', '#000000')

                
                $('#colorpicker').val('#000000')
                $('#colorpicker').attr('disabled',true)
                $('#font').attr('disabled',true)
                $('#fontSize').attr('disabled',true)
                $('#shadowHardness').attr('disabled',false)


                const shadow = this.selected.css('box-shadow')
                if(shadow != 'none'){
                    this.shadowColor = this.RGBToHex(shadow.split(')')[0]+')')
                    const shadowArray = shadow.split(' ')
                    this.boxShadow.shadowX = parseInt(shadowArray[shadowArray.length-4].replace('px',''))
                    this.boxShadow.shadowY = parseInt(shadowArray[shadowArray.length-3].replace('px',''))
                    this.boxShadow.shadowHardness = parseInt(shadowArray[shadowArray.length-2].replace('px',''))
                    this.boxShadow.shadowSize = parseInt(shadowArray[shadowArray.length-1].replace('px',''))
                    
                    $('#shadowSize').val(this.boxShadow.shadowSize)
                    $('#shadowHardness').val(this.boxShadow.shadowHardness)
                    $('#shadowColorPicker').val(this.shadowColor)
                }
                else{
                    this.boxShadow.shadowColor = '#000000'
                    this.boxShadow.shadowX = 0
                    this.boxShadow.shadowY = 0
                    this.boxShadow.shadowHardness = 0;
                    this.boxShadow.shadowSize = 0;
                    $('#shadowSize').val('0')
                    $('#shadowHardness').val('0')
                    $('#shadowColorPicker').val('#000000')
                }
            }
            this.shadowX = this.boxShadow.shadowX
            this.shadowY = this.boxShadow.shadowY
            
        },
        setOrientation(e){
            const selected = e.target.options[e.target.selectedIndex].value
            if(selected == 'potrait'){
                $('#landscape').css('display','none');
                $('#square').css('display','none');
                $('#potrait').css('display','flex');
            }else if(selected == 'landscape'){
                $('#potrait').css('display',' none')
                $('#square').css('display',' none')
                $('#landscape').css('display','flex');
            }else if(selected == 'square'){
                $('#potrait').css('display',' none')
                $('#landscape').css('display','none');
                $('#square').css('display','flex');
            }
            $('#fontSize').val(parseInt($('#'+selected).find('#name').css("font-size")))
            $('#font').val($('#'+selected).find('#name').css("font-family").replaceAll('"','').trim())
            this.selected = ''
        },
        setNumberOfPhotosPerPage(e){
            // $('#potrait').css('width',parseInt($('#potrait').find('#image-2p').css('width'))+parseInt($('#potrait').find('#image-2p').css('left')))
            const selected = e.target.options[e.target.selectedIndex].value
            if(selected == '1'){
                this.class = 'col-12'
            }else if(selected == '2'){
                this.class = 'col-xl-6 col-xs-12'
            }else if(selected == '3'){
                this.class = 'col-xl-4 col-md-6 col-xs-12'
            }else if(selected == '4'){
                this.class = 'col-xl-3 col-lg-4 col-md-6 col-xs-12'
            }

        },
        setFont(e){
            if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                const selected = e.target.options[e.target.selectedIndex].value
                const id = $('#orientation option:selected').text()
                if(this.selected){
                    this.selected.css("font-family", selected)
                }
            }
        },
        setFontSize(e){
            if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                const selected = e.target.value
                const id = $('#orientation option:selected').text()
                if(this.selected){
                    this.selected.css("font-size", parseInt(selected))
                }
            }
        },
        setTitleFontSize(e){
            const selected = e.target.value
            console.log(selected)
        },
        setColor(e){
            if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                const selected = e.target.value
                const id = $('#orientation option:selected').text()
                if(this.selected){
                    this.selected.css("color", selected)
                }
            }
        },
        setStyle(e){
            const selected = e.target.value
            if(selected == 'bold'){
                if(this.selected){
                    if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                        if(this.selected.css("font-weight") == 700){
                            this.selected.css("font-weight", 'unset')
                            $(e.target).css('background-color', '#ffffff')
                            $(e.target).css('color', '#000000')
                        }else{
                            this.selected.css("font-weight", 700)
                            $(e.target).css('background-color', '#3490dc')
                            $(e.target).css('color', '#ffffff')
                        }
                    }
                }
            }
            if(selected == 'underline'){
                if(this.selected){
                    if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                        if(this.selected.css("text-decoration").includes('underline')){
                            this.selected.css("text-decoration", 'none')
                            $(e.target).css('background-color', '#ffffff')
                            $(e.target).css('color', '#000000')

                        }else{
                            this.selected.css("text-decoration", 'underline')
                            $(e.target).css('background-color', '#3490dc')
                            $(e.target).css('color', '#ffffff')
                        }
                    }
                }
            }
            if(selected == 'italic'){
                if(this.selected){
                    if(this.selected.attr('id')=='name' || this.selected.attr('id')=='lastword'){
                        if(this.selected.css("font-style").includes('italic')){
                            this.selected.css("font-style", 'normal')
                            $(e.target).css('background-color', '#ffffff')
                            $(e.target).css('color', '#000000')
                        }else{
                            this.selected.css("font-style", 'italic')
                            $(e.target).css('background-color', '#3490dc')
                            $(e.target).css('color', '#ffffff')
                        }
                    }
                }
            }
        },
        setShadowAtKeypress(e){
            if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                if(e.target.id == 'x'){
                    $(this.selected).css('text-shadow',this.textShadow.shadowColor+' '+e.target.value+'px '+this.textShadow.shadowY+'px '+this.textShadow.shadowSize+'px')
                    this.textShadow.shadowX = e.target.value
                }else if(e.target.id == 'y'){
                    $(this.selected).css('text-shadow',this.textShadow.shadowColor+' '+this.textShadow.shadowX+'px '+e.target.value+'px '+this.textShadow.shadowSize+'px')
                    this.textShadow.shadowY = e.target.value
                }
                    
            }else{
                if(e.target.id == 'x'){
                    $(this.selected).css('box-shadow',this.boxShadow.shadowColor+' '+e.target.value+'px '+this.boxShadow.shadowY+'px '+this.boxShadow.shadowHardness+'px '+this.boxShadow.shadowSize+'px')
                    this.boxShadow.shadowX = e.target.value
                }else if(e.target.id == 'y'){
                    $(this.selected).css('box-shadow',this.boxShadow.shadowColor+' '+this.boxShadow.shadowX+'px '+e.target.value+'px '+this.boxShadow.shadowHardness+'px '+this.boxShadow.shadowSize+'px')
                    this.boxShadow.shadowY = e.target.value
                }
            }
            
        },
        setShadow(e){
            if(this.selected){   
                if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                    if(e.target.id == 'up'){
                        this.textShadow.shadowY++
                        this.shadowY = this.textShadow.shadowY
                    }               
                    if(e.target.id == 'down'){
                        this.textShadow.shadowY--
                        this.shadowY = this.textShadow.shadowY
                    }
                    if(e.target.id == 'right'){
                        this.textShadow.shadowX++
                        this.shadowX = this.textShadow.shadowX
                    }
                    if(e.target.id == 'left'){
                        this.textShadow.shadowX--
                        this.shadowX = this.textShadow.shadowX
                    }
                    $(this.selected).css('text-shadow',this.textShadow.shadowColor+' '+this.textShadow.shadowX+'px '+this.textShadow.shadowY+'px '+this.textShadow.shadowSize+'px')
                }
                else{
                    if(e.target.id == 'up'){
                        this.boxShadow.shadowY++
                        this.shadowY = this.boxShadow.shadowY
                    }
                    if(e.target.id == 'down'){
                        this.boxShadow.shadowY--
                        this.shadowY = this.boxShadow.shadowY
                    }
                    if(e.target.id == 'right'){
                        this.boxShadow.shadowX++  
                        this.shadowX = this.boxShadow.shadowX
                    }
                    if(e.target.id == 'left'){
                        this.boxShadow.shadowX--
                        this.shadowX = this.boxShadow.shadowX
                    }
                    $(this.selected).css('box-shadow',this.boxShadow.shadowColor+' '+this.boxShadow.shadowX+'px '+this.boxShadow.shadowY+'px '+this.boxShadow.shadowHardness+'px '+this.boxShadow.shadowSize+'px')
                }
            }
        },
        setShadowSize(e){
            if(this.selected){
                if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                    $(this.selected).css('text-shadow',this.textShadow.shadowColor+' '+this.textShadow.shadowX+'px '+this.textShadow.shadowY+'px '+e.target.value+'px')
                    this.textShadow.shadowSize = e.target.value
                }else{
                    $(this.selected).css('box-shadow',this.boxShadow.shadowColor+' '+this.boxShadow.shadowX+'px '+this.boxShadow.shadowY+'px '+this.boxShadow.shadowHardness+'px '+e.target.value+'px')
                    this.boxShadow.shadowSize = e.target.value
                }
            }
        },
        setShadowHardness(e){
            if(this.selected){
                $(this.selected).css('box-shadow',this.boxShadow.shadowColor+' '+this.boxShadow.shadowX+'px '+this.boxShadow.shadowY+'px '+e.target.value +'px '+this.boxShadow.shadowSize+'px')
                this.boxShadow.shadowHardness = e.target.value 
            }
        },
        setShadowColor(e){
            if(this.selected){
                if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                    $(this.selected).css('text-shadow',e.target.value+' '+this.textShadow.shadowX+'px '+this.textShadow.shadowY+'px '+this.textShadow.shadowSize+'px')
                    this.textShadow.shadowColor = e.target.value
                }else{   
                    $(this.selected).css('box-shadow',e.target.value+' '+this.boxShadow.shadowX+'px '+this.boxShadow.shadowY+'px '+this.boxShadow.shadowHardness+'px '+this.boxShadow.shadowSize+'px')
                    this.boxShadow.shadowColor = e.target.value
                }
            }
        },
        addFrameP(e){
            const selected = e.target.id
            const id = $('#orientation option:selected').text()
            console.log(id)


        },
        clean(e){
            const selected = e.target.id
            if(selected == 'potrait'){
                $('#potrait').find('#frame-p1').css('border','none')
                $('#potrait').find('#frame-p2').css('border','none')
                $('#potrait').find('#name').css('border','none')
                $('#potrait').find('#lastword').css('border','none')
                $('#potrait').find('#image-1p').css('border-color','rgba(0,0,0,.125)')
                $('#potrait').find('#image-2p').css('border-color','rgba(0,0,0,.125)')

                this.selected = ''

                $('#colorpicker').val('#000000')
                $('#colorpicker').attr('disabled',true)
                $('#font').attr('disabled',true)
                $('#fontSize').attr('disabled',true)

            }
            
        },
        goBack(e){
            e.target.style.zIndex = -1
        },
        handleFileUpload(){
            this.frame = '/storage/frames/'+this.$refs.frame.files[0].name

            const id = $('#orientation option:selected').text()
            $('#'+id.toLowerCase()).find('#frame-p1').css('z-index','1')
            $('#'+id.toLowerCase()).find('#image-1p').css('z-index','1')
            $('#'+id.toLowerCase()).find('#frame-p2').css('z-index','2')
            $('#'+id.toLowerCase()).find('#image-2p').css('z-index','2')

            
            
        },
        exportAlbum(){
            let image1
            let image2
            let frame
            let name
            let lastword
            const id = $('#orientation option:selected').text().toLowerCase()
            if(id == 'potrait'){
                image1 = $('#'+id).find('#image-1p')
                frame = $('#'+id).find('#frame-p1')
                image2 = $('#'+id).find('#image-2p')
                name = $('#'+id).find('#name')
                lastword = $('#'+id).find('#lastword')
            }
            else if(id == 'landscape'){
                image1 = $('#'+id).find('#image-1l')
                frame = $('#'+id).find('#frame-l1')
                image2 = $('#'+id).find('#image-1l')
                name = $('#'+id).find('#name')
                lastword = $('#'+id).find('#lastword')
            }
            else if(id == 'square'){
                image1 = $('#'+id).find('#image-1s')
                frame = $('#'+id).find('#frame-s1')
                image2 = $('#'+id).find('#image-1s')
                name = $('#'+id).find('#name')
                lastword = $('#'+id).find('#lastword')
            }
            const image1Props = {
                // top:image1.css('top'),
                top:(100 * parseFloat(image1.position().top/parseFloat(image1.parent().width())))+'%',
                // left:image1.css('left'),
                left:(100 * parseFloat(image1.position().left/parseFloat(image1.parent().height())))+'%',
                // height:image1.css('height'),
                height:(100 * parseFloat(image1.css('height'))/parseFloat(image1.parent().height()))+'%',
                // width: image1.css('width'),
                width:(100 * parseFloat(image1.css('width'))/parseFloat(image1.parent().width()))+'%',
                shadow: image1.css('box-shadow')
            }
            const image2Props = {
                // top:image2.css('top'),
                top:(100 * parseFloat(image2.position().top/parseFloat(image2.parent().width())))+'%',
                // left:image2.css('left'),
                left:(100 * parseFloat(image2.position().left/parseFloat(image2.parent().height())))+'%',
                // height:image2.css('height'),
                height:(100 * parseFloat(image2.css('height'))/parseFloat(image2.parent().height()))+'%',
                // width: image2.css('width'),
                width:(100 * parseFloat(image2.css('width'))/parseFloat(image2.parent().width()))+'%',
                shadow: image2.css('box-shadow')
            }
            const nameProps = {
                top:name.css('top'),
                left:name.css('left'),
                shadow: name.css('text-shadow'),
                fontFamily: name.css('font-family').replaceAll('"',''),
                fontSize: name.css('font-size'),
                textDecoration: name.css('text-decoration'),
                fontStyle: name.css('font-style'),
                fontWeight: name.css('font-weight')
            }
            const lastwordProps = {
                top:lastword.css('top'),
                left:lastword.css('left'),
                shadow: lastword.css('text-shadow'),
                fontFamily: lastword.css('font-family').replaceAll('"',''),
                fontSize: lastword.css('font-size'),
                textDecoration: lastword.css('text-decoration'),
                fontStyle: lastword.css('font-style'),
                fontWeight: lastword.css('font-weight')
            }
            const frameProps = {
                src: frame.attr('src'),
            }
            // console.log(image1Props)

            axios.post('/export',{
                    image1:image1Props,
                    image2:image2Props,
                    frame:frameProps,
                    name:nameProps,
                    lastword:lastwordProps,
                    class: this.class,
                    yearbookId : this.yearbookId
            })

        },
        RGBToHex(rgb) {
            let sep = rgb.indexOf(",") > -1 ? "," : " ";
            rgb = rgb.substr(4).split(")")[0].split(sep);
            for (let R in rgb) {
                let r = rgb[R];
                if (r.indexOf("%") > -1)
                    rgb[R] = Math.round(r.substr(0, r.length - 1) / 100 * 255);
            }
            let r = (+rgb[0]).toString(16),
                g = (+rgb[1]).toString(16),
                b = (+rgb[2]).toString(16);

            if (r.length == 1)
                r = "0" + r;
            if (g.length == 1)
                g = "0" + g;
            if (b.length == 1)
                b = "0" + b;

            return "#" + r + g + b;
        }
    },
    computed:{
        xVal(){
            if(this.selected){
                if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                    return this.textShadow.shadowX
                }else{
                    return this.boxShadow.shadowX
                }
            }else{
                return 0
            }
        },
        yVal(){
            if(this.selected){
                if(this.selected.attr('id') == 'name' || this.selected.attr('id') == 'lastword'){
                    return this.textShadow.shadowY
                }else{
                    return this.boxShadow.shadowY
                }
            }else{
                return 0
            }
        }
    }
})
</script>
