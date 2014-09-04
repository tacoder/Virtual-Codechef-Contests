<?php require("../../includes/header.php"); ?><h1>Kisses & Hugs</h1><div class="content">

<div>
<p>
        Princess Artapoelc greeted her guests by either kissing on the cheek (<b>K</b>) or hugging (<b>H</b>). From the first guest </p>
<p>she kisses, she has a<br />
compulsion to necessarily kiss every alternate guest from that first kissed guest. That is if the guests are <b>G</b><sub>1</sub>, </p>
<p><b>G</b><sub>2</sub>, ..., <b>G</b><sub>i</sub>, <b>G</b><sub>i+1</sub>, ..., <b>G</b><sub>n</sub> and if she first kissed <b>G</b><sub>i</sub> then she must necessarily kiss </p>
<p><b>G</b><sub>i+2</sub>, <b>G</b><sub>i+4</sub>, <b>G</b><sub>i+6</sub> ... till the last<br />
        possible guest. Your task is to determine in how many ways she can greet <b>N</b> guests.
    </p>
<p>
        <b>Input</b>
    </p>
<p>First line of the input contains <b>T (T ≤ 1000) </b>denoting the number of test cases.</p>
<p>
        <b>T</b><br />
        lines follow each containing a single integer <b>N (1 ≤ N ≤ 10^9) </b>denoting the number of guests.
    </p>
<p>
        <b></b>
    </p>
<p>
        <b>Output</b>
    </p>
<p>
        For each case the output should be a single integer representing the number of ways Artapoelc can greet <b>N </b>guests. As the </p>
<p>answer can be large<br />
        print it modulo <b>1000000007</b>.
    </p>
<p>
        <b></b>
    </p>
<p>
        <b>Example</b>
    </p>
<p>
        <b></b>
    </p>
<p>
        <b>Input</b>
    </p>
<pre>
3
1
2
3
    </pre><p>
        <b></b>
    </p>
<p>
        <b>Output</b>
    </p>
<pre>
2
4
6
   </pre><p>
        <b>Explanation:</b>
    </p>
<p>
        In the first case the possible ways are
    </p>
<p>
        K, H
    </p>
<p>
        Second case:
    </p>
<p>
        KH, HK, HH, KK
    </p>
<p>
        Third case:
    </p>
<p>
        HHH, HHK, HKH, HKK, KHK, KKK
    </p>
</div>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-04-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>