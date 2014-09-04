<?php require("../../includes/header.php"); ?><h1>Help The Government</h1><div class="content">

<p>
The government of Nova Mareterrania requires that various legal documents have stamps attached to them so that the government can derive revenue from them. In terms of recent legislation, each class of document is limited in the number of stamps that may be attached to it. The government wishes to know how many different stamps, and of what values, they need to print to allow the widest choice of values to be made up under these conditions. Stamps are always valued in units of $1.</p>
<p>This has been analysed by government mathematicians who have derived a formula for n(h,k), where h is the number of stamps that may be attached to a document, k is the number of denominations of stamps available, and n is the largest attainable value in a continuous sequence starting from $1. For instance, if h=3, k=2 and the denominations are $1 and $4, we can make all the values from $1 to $6 (as well as $8, $9 and $12). However with the same values of h and k, but using $1 and $3 stamps we can make all the values from $1 to $7 (as well as $9). This is maximal, so n(3,2) = 7.</p>
<p>Unfortunately the formula relating n(h,k) to h, k and the values of the stamps has been lost--it was published in one of the government reports but no-one can remember which one, and of the three researchers who started to search for the formula, two died of boredom and the third took a job as a lighthouse keeper because it provided more social stimulation.</p>
<p>The task has now been passed on to you. You doubt the existence of a formula in the first place so you decide to write a program that, for given values of h and k, will determine an optimum set of stamps and the value of n(h,k).</p>
<h3>Input</h3>
<p>
Input will consist of several lines, each containing a value for h and k. The file will be terminated by two zeroes (0 0). For technical reasons the sum of h and k is limited to 9. (The President lost his little finger in a shooting accident and cannot count past 9).</p>
<h3>Output</h3>
<p>
Output will consist of a line for each value of h and k consisting of the k stamp values in ascending order right justified in fields 3 characters wide, followed by a space and an arrow (->) and the value of n(h,k) right justified in a field 3 characters wide.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 2
0 0

<b>Output:</b>
1  3 ->  7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sakshigopal7">sakshigopal7</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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