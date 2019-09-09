<table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td>
            <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td style="vertical-align: top;">
                        <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td style="text-align: center;" class="sc-cHGsZl bHiaRe"><img style="max-width: 130px; display: block;" src="{{$cargo["departamento"]["empresa"]["logo_em"]}}" role="presentation" class="sc-kjoXOD hpTAeq" width="130" alt="logo"></td>
                            </tr>
                            <tr>
                                <td height="30"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <table style="font-size: medium; font-family: Trebuchet MS; display: inline-block;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr style="text-align: center;">
                                                @if ($skype_re)
                                                    <td>
                                                        <a style="display: inline-block; padding: 0px; background-color: {{$cargo['departamento']['empresa']['color_em']}};" href="skype:{{$skype_re}}?call" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-bRBYWo ccSRck"><img style="background-color: {{$cargo['departamento']['empresa']['color_em']}}; max-width: 135px; display: block;" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/skype.png?token=ADL5BL4XBZCC3S224CZJRVK5PJOKW" alt="skype" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-Rmtcm gwGgYM" height="24"></a>
                                                    </td>
                                                @endif
                                                @if ($linkedin_re)
                                                    <td>
                                                        <a style="display: inline-block; padding: 0px; background-color: {{$cargo['departamento']['empresa']['color_em']}};" href="{{$linkedin_re}}" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-bRBYWo ccSRck"><img style="background-color: {{$cargo['departamento']['empresa']['color_em']}}; max-width: 135px; display: block;" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/github.png?token=ADL5BL3K5JBJSIZ2NZZBUFK5P66H4" alt="skype" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-Rmtcm gwGgYM" height="24"></a>
                                                    </td>
                                                @endif
                                                @if ($github_re)
                                                    <td>
                                                        <a style="display: inline-block; padding: 0px; background-color: {{$cargo['departamento']['empresa']['color_em']}};" href="{{$github_re}}" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-bRBYWo ccSRck"><img style="background-color: {{$cargo['departamento']['empresa']['color_em']}}; max-width: 135px; display: block;" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/linkedin.png?token=ADL5BLYSVEF4ZQ3CAFYY3XS5P66DE" alt="skype" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-Rmtcm gwGgYM" height="24"></a>
                                                    </td>
                                                @endif
                                            <td width="5">
                                                <div></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="46">
                        <div></div>
                    </td>
                    <td style="padding: 0px; vertical-align: middle;">
                        <h3 style="margin: 0px; font-size: 18px; color: rgb(0, 0, 0);" color="#000000" class="sc-jhAzac hmXDXQ"><span>{{$nombre_re}}</span><span>&nbsp;</span><span>{{$apellido_re}}</span></h3>
                        <p style="margin: 0px; color: rgb(0, 0, 0); font-size: 14px; line-height: 22px;" color="#000000" font-size="medium" class="sc-fBuWsC eeihxG"><span>{{$cargo['nombre_ca']}}</span></p>
                        <p style="margin: 0px; font-weight: 500; color: rgb(0, 0, 0); font-size: 14px; line-height: 22px;" color="#000000" font-size="medium" class="sc-fMiknA bxZCMx"><span>{{$cargo['departamento']['titulo_de']}}</span><span>&nbsp;|&nbsp;</span><span>{{$cargo['departamento']['empresa']['nombrel_em']}}</span></p>
                        <table style="font-size: medium; font-family: Trebuchet MS; width: 100%;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td height="5"></td>
                            </tr>
                            <tr>
                                <td style="width: 100%; border-bottom: 1px solid {{$cargo['departamento']['empresa']['color_em']}}; border-left: medium none; display: block;" color="{{$cargo['departamento']['empresa']['color_em']}}" direction="horizontal" class="sc-hzDkRC kpsoyz" height="1"></td>
                            </tr>
                            <tr>
                                <td height="5"></td>
                            </tr>
                            </tbody>
                        </table>
                        <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr style="vertical-align: middle;" height="25">
                                <td style="vertical-align: middle;" width="30">
                                    <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;"><span width="11" style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-iRbamj blSEcj"><img style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/telefono.png?token=ADL5BL3RSJVRN6TZETHMRXS5PJNYO" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-gPEVay eQYmiW" width="13"></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px; color: rgb(0, 0, 0);"><a style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;" href="tel:{{$cargo['departamento']['empresa']['tell_em']}}" color="#000000" class="sc-jlyJG bbyJzT"><span>{{$cargo['departamento']['empresa']['telp_em']}}</span></a> | <a style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;" href="tel:{{$cell_re}}" color="#000000" class="sc-jlyJG bbyJzT"><span>{{$celp_re}}</span></a></td>
                            </tr>
                            <tr style="vertical-align: middle;" height="25">
                                <td style="vertical-align: middle;" width="30">
                                    <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;"><span width="11" style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-iRbamj blSEcj"><img style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/email.png?token=ADL5BLYWT5UM5DV2EUUHWBS5PJOOE" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-gPEVay eQYmiW" width="13"></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px;"><a style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;" href="mailto:{{$email_re}}" color="#000000" class="sc-jlyJG bbyJzT"><span>{{$email_re}}</span></a></td>
                            </tr>
                            <tr style="vertical-align: middle;" height="25">
                                <td style="vertical-align: middle;" width="30">
                                    <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;"><span width="11" style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-iRbamj blSEcj"><img style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/web.png?token=ADL5BL4JZQHIZC2EZNUTKDK5PJORE" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-gPEVay eQYmiW" width="13"></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px;"><a style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;" href="//{{$cargo['departamento']['empresa']['dominio_em']}}" target="_blank" color="#000000" class="sc-jlyJG bbyJzT"><span>{{$cargo['departamento']['empresa']['dominio_em']}}</span></a></td>
                            </tr>
                            <tr style="vertical-align: middle;" height="25">
                                <td style="vertical-align: middle;" width="30">
                                    <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;"><span width="11" style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-iRbamj blSEcj"><img style="display: block; background-color: {{$cargo['departamento']['empresa']['color_em']}};" src="https://raw.githubusercontent.com/Inpsercom-IT/ebiss/firma/mapa.png?token=ADL5BLY2WABDSLVQID3SBV25PJOUY" color="{{$cargo['departamento']['empresa']['color_em']}}" class="sc-gPEVay eQYmiW" width="13"></span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px;"><a style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;" href="http://maps.google.com/maps?daddr={{$cargo['departamento']['empresa']['lat_em']}},{{$cargo['departamento']['empresa']['lng_em']}}&ll=true" target="_blank" color="#000000" class="sc-jlyJG bbyJzT"><span>{{$cargo['departamento']['empresa']['direccion_em']}}</span></a></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table style="font-size: medium; font-family: Trebuchet MS;" class="sc-jDwBTQ dWtMUn" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td height="30"></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
