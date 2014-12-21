<?php require("../../includes/header.php"); ?><h1>Avoiding Cameras</h1><div class="content">
<p>A team of robbers have entered the premises of the Bank of Chefland. The bank consists of a long corridor, with <b>N</b> cameras fitted along the corridor. To prevent being seen in the cameras, the robbers will generate <b>K</b> electric surges to disable the cameras. If a surge is generated between distance A and B (measured from one end of the corridor), then all cameras in the inclusive range get disabled.</p>
<p>Given the locations of the cameras and the region affected by each surge, print the total number of cameras disabled. All coordinates are measured from one end of the corridor.</p>
<h3>INPUT</h3>
<p>First line consists of two space-separated integers, N and K<br />Next line contains N space-separated integers, where the i<sup>th</sup> integer C<sub>i</sub> indicated the coordinate of the i<sup>th</sup> camera.<br />Each of the next K lines contains two integers. i<sup>th</sup> line contains integers A<sub>i</sub> and B<sub>i</sub> indicating the region affected by the i<sup>th</sup> surge.</p>
<h3>OUTPUT</h3>
<p>Print a single integer, indicating the total number of cameras disabled by the surges.</p>
<h3>CONSTRAINTS</h3>
<pre>1≤N,K≤100000<br />1≤C<sub>i</sub>,A<sub>i</sub>,B<sub>i</sub>≤10<sup>9</sup>
<h3>SAMPLE INPUT</h3><pre>2 3<br />2 4<br />1 3<br />2 4<br />4 6</pre><h3>SAMPLE OUTPUT</h3>
<pre>2</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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