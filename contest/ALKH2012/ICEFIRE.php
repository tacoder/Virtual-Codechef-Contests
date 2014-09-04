<?php require("../../includes/header.php"); ?><h1>Ice and Fire</h1><div class="content">

<p>
Little Johny is a polar bear which lives in arctic region.The bear can hardly tolerate any increase in atmospheric temperature.<br />
After an intra galactic explosion fragments of several meteorites are showered on the entire arctic region in the form of fire bodies.<br />
Little Johny is severely scared of this natural phenomenon as this has caused an considerable increase in temperature of arctic region.<br />
The fire bodies are now randomly distributed on the surface of the arctic region.Poor Johny is now in search of the coolest region for his own<br />
survival.Little Johny has got a unique power that once he found such a region and own it he can have access to all the ice units in that region.<br />
But the cons is that the bear cannot avoid the heat produced by the fire bodies present in that region.Johny has to find the coolest region as soon as possible.<br />
Your task is to find the area of the coolest region that Johny need for his survival.If there are more than one possible coolest regions, then print the one which has maximum area.<br />
               Consider the arctic region as a <b>N X M</b> map.Each cell of the map is either represented by "F" or "I" which represents fire and ice respectively.<br />
The magnitude of each "F" or "I" is computed by the following formula :<br />
<br />
           <b> F=(m^(im+jm))%P</b><br />
            <b>I=(n^(in+jn))%P</b><br />
where <br />
m=  serial number of a particular fire starting from one and counted row wise<br />
im=  row number of mth fire starting from 0<br />
jm=  column number of mth fire starting from 0</p>
<p>n=serial number of a particular ice starting from one and counted row wise<br />
in=row number of nth ice starting from 0<br />
jn=column number of nth ice starting from 0<br />
<br />
<b>P</b>= prime number given for each test case<br />
<br />
<b>Note : </b>The region is defined as sub-matrix of the original matrix.</p>
<h3>Input</h3>
<p>
The first line of the input contains the number of test cases <b>T</b>.Then follows <b>T</b> test cases.First line of each test case contains <b>N</b> and <b>M</b> ,the dimensions of the Arctic region.Then follow a <b>N X M</b> character matrix filled with character 'F' or 'I'. The last line of each test case contains an integer <b>P</b> which is basically a prime number.</p>
<h3>Output</h3>
<p>
For each test case output the area of the coolest region required for Little Johny for his survival.If there are more than one possible coolest regions, then print the one which has maximum area.</p>
<h3>Constraints</h3>
<pre>
1&lt;=<b>T</b>&lt;=10
1&lt;=<b>N,M</b>&lt;=100
2&lt;=<b>P</b>&lt;=10^4 and <b>P</b> is a prime number
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2
FI
FI
2
3 4
FIFI
IIIF
IIFF
23  
<b>Output:</b>
2
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bb_1">bb_1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>