<?php require("../../includes/header.php"); ?><h1>Avoiding Cameras - 2</h1><div class="content">
<p>A team of robbers have entered the premises of the Bank of Chefland. The bank consists of a long corridor, with <b>N</b> cameras fitted along the corridor. Each camera has a <i>field of view</i>, i.e., i<sup>th</sup> camera has monitors all activity between coordinates C<sub>i</sub> and D<sub>i</sub>. All coordinates are measured from one end of the corridor.</p>
<p>The robbers want to understand the layout of the cameras. Specifically, they ask <b>Q</b> queries. For the i<sup>th</sup> query, tell the number of cameras that would notice if the robbers move directly from coordinate A<sub>i</sub> to B<sub>i</sub>. Can you help them?</p>
<h3>INPUT</h3>
<p>First line consists of two space-separated integers, N and Q.<br />Each of the next N lines contain two space-separated integers, i<sup>th</sup> line contains C<sub>i</sub> and D<sub>i</sub>.<br />Each of the next Q lines contains two integers. i<sup>th</sup> line contains integers A<sub>i</sub> and B<sub>i</sub>.</p>
<h3>OUTPUT</h3>
<p>Print Q lines, where i<sup>th</sup> line contains a single integer indicating the answer of the i<sup>th</sup> query.</p>
<h3>CONSTRAINTS</h3>
<pre>1≤N,K≤100000<br />1≤C<sub>i</sub>,D<sub>i</sub>,A<sub>i</sub>,B<sub>i</sub>≤10<sup>9</sup>
<h3>SAMPLE INPUT</h3><pre>2 3<br />1 2<br />3 7<br />1 3<br />3 4<br />8 11</pre><h3>SAMPLE OUTPUT</h3>
<pre>2<br />1<br />0</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>