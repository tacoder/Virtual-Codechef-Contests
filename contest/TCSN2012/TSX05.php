<?php require("../../includes/header.php"); ?><h1>Common Path</h1><div class="content">

<p>There are so many Houses in Sardapally. Every house has one unique number. But the only path to/from these houses is as described below <br />
1)you can go directly only to house number 1 but not to others. <br />
2)for other houses you have to go through other houses.</p>
<p>a) If house number m is even u have to go through the house number m/2.<br />
b) If house number m is odd u have to go through the house number (m-1)/2.</p>
<p>Now, As we know Teju and Akash are best friends. They want to go for a Movie.You need to tell the common path they will follow while coming out from their houses ,while crossing sardapally.House number of Teju and Akash is given.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=200<br />
1&lt;=N&lt;=1000000<br />
x,y&lt;=N</p>
<h3>Input</h3>
<p>First line contains T, the number of test cases and N ,Total number of houses.Each test case contain one line of two integer x,y (house number of Teju and Akash respectively ).</p>
<h3>Output</h3>
<p>For each test case, there will be one single line containing<br />
all common house numbers, that Teju and Akash will follow, while crossing Sardapally.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2 100
32 64
34 14

<b>Output:</b>
1 2 4 8 16 32 
1 
</pre><p><b>Explanation :</b><br />
For second test case: Path for house number 34 will be :34->17->8->4->2->1<br />
and for house number 14 it will be : 14->7->3->1<br />
so common path while crossing Sardapally is house number 1.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/deveshranjan">deveshranjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
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