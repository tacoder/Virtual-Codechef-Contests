<?php require("../../includes/header.php"); ?><h1>MUTANT DESTRUCTION</h1><div class="content">
<p>While Tom Cruise(Cage) fighting in the movie "Edge of Tomorrow", he finds himself in a modern lab, where he needs to kill the brain of a mutant species Omega.<br />
The DNA of the Omega is made up of characters of <b>A</b>, <b>T</b>, <b>G</b> and <b>C</b> like ours. He has certain enzymes which will cut and remove certain parts of this DNA.<br />
The mutant being an intelligent species, is able to reform its DNA, even after a piece of DNA is removed.
</p>
<p>You will be given a DNA sequence, and few enzymes. Suppose, a DNA sequence goes like this : <b>ATGCTGCTATGCATGCAGTGACT</b>, and you are given enzymes which can remove <b>AT</b> and <b>GC</b> sequences. Thereby, you need to remove all occurrences of AT from the DNA first and then reform the DNA and apply the next enzyme to remove all occurrences of GC. The output of the problem would be the string you get at last reforming the pieces which are not removed by these enzymes.</p>
<h2>Input</h2>
<p>The first line of input consists of an integer <b>n</b> that denotes the number of enzymes. The second line has the DNA sequence.<br />
The next <b>n</b> lines has the input B<sub>1</sub>, B<sub>2</sub>, B<sub>3</sub>... B<sub>n</sub>.</p>
<h2>Output</h2>
<p>For given input DNA sequence, output a single line containing the final reformed DNA that is formed by repeatedly removing all the occurrences of B<sub>1</sub>, B<sub>2</sub>, B<sub>3</sub>... B<sub>n</sub> from A.<br />
<br />In case the DNA is completely consumed print <b>0</b> to indicate that there is no DNA left.</p>
<h3>Constraints</h3>

<ul>
<li><b>1</b> &lt;= <b>n</b> &lt;= <b>10</b></li>
</ul>

<h2>Example</h2>
<p> <b>Input:</b></p>
<p>2<br />
<br />ATACGCATGACGATGCATGCAGCAT<br />
<br />ATA<br />
<br />GC
</p>
<p> <b>Output:</b></p>
<p>CATGACGATATAAT</p>
<p> <b>Input:</b></p>
<p>3<br />
<br />ATGCATGCATCGACTCAGCATCAGCATCGACTA<br />
<br />TG<br />
<br />GC<br />
<br />AT</p>
<p> <b>Output:</b></p>
<p><br />ACACCGACTCACACGACTA</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/srujanjha">srujanjha</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
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