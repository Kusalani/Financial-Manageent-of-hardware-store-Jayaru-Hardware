@extends('task1s.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>

                <h2>Add Today Data</h2>
                <br>

            </div>


                <script >





                    function perRound(num, precision) {
                        var precision = 2; //default value if not passed from caller, change if desired
                        // remark if passed from caller
                        precision = parseInt(precision); // make certain the decimal precision is an integer
                        var result1 = num * Math.pow(10, precision);
                        var result2 = Math.round(result1);
                        var result3 = result2 / Math.pow(10, precision);
                        return zerosPad(result3, precision);
                    }

                    function zerosPad(rndVal, decPlaces) {
                        var valStrg = rndVal.toString(); // Convert the number to a string
                        var decLoc = valStrg.indexOf("."); // Locate the decimal point
                        // check for a decimal
                        if (decLoc == -1) {
                            decPartLen = 0; // If no decimal, then all decimal places will be padded with 0s
                            // If decPlaces is greater than zero, add a decimal point
                            valStrg += decPlaces > 0 ? "." : "";
                        }
                        else {
                            decPartLen = valStrg.length - decLoc - 1; // If there is a decimal already, only the needed decimal places will be padded with 0s
                        }
                        var totalPad = decPlaces - decPartLen;    // Calculate the number of decimal places that need to be padded with 0s
                        if (totalPad > 0) {
                            // Pad the string with 0s
                            for (var cntrVal = 1; cntrVal <= totalPad; cntrVal++)
                                valStrg += "0";
                        }
                        return valStrg;
                    }
                    // send the value in as "num" in a variable

                    // clears field of default value
                    function clear_field(field) {
                        if (field.value==field.defaultValue) {
                            field.value=''
                        }
                    }

                    function checkNumber(obj)
                    {
                        var str = obj.value;

                        if (str.length == 0 || str == "" || str == null) {
                            return false;
                        }

                        for (var i = 0; i< str.length; i++) {
                            var ch = str.substring(i, i + 1)
                            if ((ch< "0" || "9"< ch) && ch != '.' && ch != '$' && ch != ',') {
                                return false;
                            }
                        }

                        return true;
                    }

                    function tonum(str)
                    {
                        var     nstr = "";

                        for (var i = 0; i< str.length; i++) {
                            var ch = str.substring(i, i + 1);
                            if ((ch >= "0" && ch<= "9") || ch == '.') {
                                nstr += ch;
                            }
                        }

                        return parseFloat(nstr);
                    }

                    function valueOrDefault(obj, defval)
                    {
                        if (!checkNumber(obj)) {
                            return defval;
                        }

                        var val = tonum(obj.value);

                        if (val == 0) {
                            return defval;
                        }
                        return val;
                    }


                    function format(val, len, decimal)
                    {
                        var     scale = 1;

                        if (decimal == null)
                            decimal = 1;

                        for (i = 0; i<= decimal; i++)
                            scale *= 10;

                        var     str = "" + Math.round(parseFloat(val) * scale);

                        if (str.length == 0 || str == "0") {
                            str = "00";
                        }

                        str = str;
                        i = len - str.length;
                        if (scale != 1)
                            i--;
                        while (0< i--)
                            str = " " + str;
                        if (scale != 1) {
                            var p = len - decimal - 2;
                            var a = str.substring(0, p);
                            var b = str.substring(p, len);
                            return a + "." + b;
                        }
                        return str;
                    }

                    function compute(input) {

                        var form = input.form;

                        assetc1 = valueOrDefault(form.assetc1, 0); // This is all the income
                        assetc2 = valueOrDefault(form.assetc2, 0);
                        assetc3 = valueOrDefault(form.assetc3, 0);


                        tca = assetc1 - assetc2 - assetc3; // This adds up the income

                        form.total_current.value = perRound(tca);

                        ta2 = assetc1 - assetc2 - assetc3; // This is the total projected income

                        form.total_current2.value = perRound(ta2);



                        liabc1 = valueOrDefault(form.liabc1, 0); // this is the expenditure
                        liabc2 = valueOrDefault(form.liabc2, 0);
                        liabc3 = valueOrDefault(form.liabc3, 0);
                        liabc4 = valueOrDefault(form.liabc4, 0);
                        liabc5 = valueOrDefault(form.liabc5, 0);
                        liabc6 = valueOrDefault(form.liabc6, 0);
                        liabc7 = valueOrDefault(form.liabc7, 0);
                        liabc8 = valueOrDefault(form.liabc8, 0);
                        liabc9 = valueOrDefault(form.liabc9, 0);
                        liabc10 = valueOrDefault(form.liabc10, 0);
                        liabc11 = valueOrDefault(form.liabc11, 0);
                        liabc12 = valueOrDefault(form.liabc12, 0);
                        liabc13 = valueOrDefault(form.liabc13, 0);
                        liabc14 = valueOrDefault(form.liabc14, 0);
                        liabc15 = valueOrDefault(form.liabc15, 0);
                        liabc16 = valueOrDefault(form.liabc16, 0);
                        liabc17 = valueOrDefault(form.liabc17, 0);
                        liabc18 = valueOrDefault(form.liabc18, 0);
                        liabc19 = valueOrDefault(form.liabc19, 0);
                        liabc20 = valueOrDefault(form.liabc20, 0);
                        liabc21 = valueOrDefault(form.liabc21, 0);
                        liabc22 = valueOrDefault(form.liabc22, 0);
                        liabc23 = valueOrDefault(form.liabc23, 0);
                        liabc24 = valueOrDefault(form.liabc24, 0);
                        liabc25 = valueOrDefault(form.liabc25, 0);


                        tcl = liabc1 + liabc2 + liabc3 + liabc4 + liabc5 + liabc6 + liabc7 + liabc8 + liabc9 + liabc10 + liabc11 + liabc12 + liabc13 + liabc14 + liabc15 + liabc16 + liabc17 + liabc18 + liabc19 + liabc20 + liabc21 + liabc22 + liabc23 + liabc24 - liabc25; // This the total of the expenditure

                        form.total_currliab.value = perRound(tcl);

                        tc2 = liabc1 + liabc2 + liabc3 + liabc4 + liabc5 + liabc6 + liabc7 + liabc8 + liabc9 + liabc10 + liabc11 + liabc12 + liabc13 + liabc14 + liabc15 + liabc16 + liabc17 + liabc18 + liabc19 + liabc20 + liabc21 + liabc22 + liabc23 + liabc24 - liabc25; // This is the projected expenditure

                        form.total_currliab2.value = perRound(tc2);


                        net2 = ta2 - tc2;  // This is the income minus the expenditure

                        form.total_net2.value = perRound(net2);


                    }


                </script>


                    <h3 class="text-secondary">Loss or Profit Statement</h3>

                    <br>
                    <div align="center" >
                        <form name="lbal">
                            <table border="0" cellPadding="5" cellSpacing="0"
                                   style="width:100%; max-width:468px; background-color:#F6F6F6;">
                                <tr>
                                    <th align="left" bgcolor="#a9a9a9">
                                        <font color="#FFFFFF">INCOME</font></th>
                                    <td bgcolor="#a9a9a9">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        Total Sales
                                    </td>
                                    <td>
                                        <nobr>$ <INPUT name="assetc1" type="text" onChange="compute(this)" value="0" size="18">
                                        </nobr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <font color="#FF0000">less
                                            Cost of Sales</font></td>
                                    <td><font color="#FF0000">$</font>
                                        <INPUT name="assetc2" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <font color="#FF0000">less Tax Collected</font></td>
                                    <td><font color="#FF0000">$</font>
                                        <INPUT name="assetc3" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b> Gross Profit (Loss) <font size="2"> (Tax Exclusive)</font></b></td>

                                    <td>$
                                        <INPUT name="total_current" type="text" onChange="compute(this)" value="0" size="18">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;</td>

                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <th align="left" bgcolor="#a9a9a9">
                                        <strong><font color="#FFFFFF">EXPENSES</font></strong></th>

                                    <td bgcolor="#a9a9a9">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <div style="margin:auto; text-align:center;">




                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input name="OtherE1" type="text" value="Water" size="30"></td>

                                    <td>
                                        <nobr>$
                                            <INPUT name="liabc1" type="text" onChange="compute(this)" value="0" size="18">
                                        </nobr>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE2" type="text" value="Advertising" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc2" type="text" value="0" size="18" onChange="compute(this)"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE3" type="text" value="Bank Charges" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc3" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE4" type="text" value="Interest" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc4" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE5" type="text" value="Depreciation" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc5" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE6" type="text" value="Electricity &amp; Gas" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc6" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE7" type="text" value="Equipment Hire / Lease" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc7" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE8" type="text" value="Insurance" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc8" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE9" type="text" value="Legal Fees" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc9" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE10" type="text" value="Motor Vehicle Expenses" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc10" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE11" type="text" value="Postage, Telephone &amp; Fax" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc11" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE12" type="text" value="Stationery" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc12" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE13" type="text" value="Rent" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc13" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE14" type="text" value="Repairs &amp; Maintenance" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc14" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE15" type="text" value="Security" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc15" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE16" type="text" value="Sundries" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc16" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input name="OtherE17" type="text" value="Supperannuation" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc17" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td>

                                        <input name="OtherE18" type="text" value="Transport / Courier" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc18" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td><input name="OtherE19" type="text" value="Wages & Salaries" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc19" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td><input name="OtherE20" type="text" value="Workers Compensation" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc20" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td><input name="OtherE21" type="text" value="Bad Debts" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc21" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td><input name="OtherE22" type="text" value="Travel & Entertainment" size="30"></td>


                                    <td>$
                                        <INPUT name="liabc22" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td><input name="OtherE23" type="text" value="Vehicle Expenses" size="30"></td>

                                    <td>$
                                        <INPUT name="liabc23" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>
                                <tr>
                                    <td><input name="OtherE24" type="text" value="Other ..." size="30"></td>
                                    <td>$
                                        <INPUT name="liabc24" type="text" onChange="compute(this)" value="0" size="18"></td>
                                </tr>

                                <tr>
                                    <td><font color="#FF0000">less Tax on Expenses</font></td>

                                    <td><font color="#FF0000">$</font>
                                        <INPUT name="liabc25" type="text" onChange="compute(this)" value="0" size="18">
                                    </td>
                                </tr>

                                <tr>
                                    <td><b>Total Expenses <font size="2">(Tax Exclusive)</font></b></td>

                                    <td>$
                                        <INPUT name="total_currliab" type="text" onChange="compute(this)" value="0" size="18">
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <th align="left" bgcolor="#a9a9a9"><strong><font color="#FFFFFF">CALCULATED
                                                PROFIT &amp; LOSS</font></strong></th>

                                    <td bgcolor="#a9a9a9">&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>

                                    <td>&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gross Profit (Loss) <font size="2">(Tax Exclusive)</font></td>

                                    <td>
                                        <nobr>$
                                            <INPUT name="total_current2" type="text" onChange="compute(this)" value="0" size="18">

                                        </nobr>
                                    </td>
                                </tr>
                                <tr>
                                    <td><font color="#FF0000">Total Expenses</font></td>

                                    <td><font color="#FF0000">$</font>
                                        <INPUT name="total_currliab2" type="text" onChange="compute(this)" value="0" size="18">
                                    </td>
                                </tr>
                                <tr>
                                    <td><b> Net Profit (Loss) <font size="2">(Tax Exclusive)</font></b></td>

                                    <td>$
                                        <INPUT name="total_net2" type="text" onChange="compute(this)" value="0" size="18">
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2" align="center"><input name="Reset" type="reset" value="      Reset      "></td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>

                                    <td>&nbsp;
                                    </td>
                                </tr>

                            </table>
                        </form>









                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('task1s.index') }}"> Back</a>
            </div>

    </div>
        </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('task1s.store') }}" method="POST">
        @csrf


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Loss Or Profit:</strong>
                    <input type="text" name="detail" class="form-control" placeholder="Enter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount:</strong>
                    <textarea class="form-control" style="height:150px" name="amount" placeholder="Enter"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


@endsection
