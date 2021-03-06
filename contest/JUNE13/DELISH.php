<?php require("../../includes/header.php"); ?><h1>Dessert Wizard</h1><div class="content">

<p>It's finally summer in Chefland! So our chef is looking forward to prepare some of the best "beat-the-heat" dishes to attract more customers. He summons the Wizard of Dessert to help him with one such dish.</p>
<p> The wizard provides the chef with a sequence of <b>N</b> ingredients where the <b>i<sup>th</sup></b> ingredient has a delish value of <b>D[i]</b>. The preparation of the dish takes place in two phases. <br/><br/></br/></br/></p>
<p><b>Phase 1 :</b> The chef chooses two indices <b>i</b> and <b>j</b> and adds the ingredients <b>i, i+1, ..., j</b> to his dish. He also finds the sum of the delish value in this range i.e <b>D[i] + D[i+1] + ... + D[j]</b>.  <br/><br/> </br/></br/></p>
<p><b>Phase 2 :</b> The chef chooses two more indices <b>k</b> and <b>l</b> and adds the ingredients <b>k, k+1, ..., l</b> to his dish. He also finds the sum of the delish value in this range i.e <b>D[k] + D[k+1] + ... + D[l]</b>. <br/> <br/><br />
Note that <b>1</b>  ≤ <b>i</b>  ≤ <b>j</b> &lt; <b>k</b>  ≤ <b>l</b> ≤ <b>N</b>. <br/><br/></br/></br/></br/></br/></p>
<p>The total delish value of the dish is determined by the absolute difference between the values obtained in the two phases. Obviously, the chef wants to maximize the total delish value for his dish. So, he hires you to help him.
 </p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b> denoting the number of test cases. For each test case, the first line contains an integer <b>N</b> denoting the number of ingredients. The next line contains <b>N</b> space separated integers where the <b>i<sup>th</sup></b> integer represents the delish value <b>D[i]</b> of the <b>i<sup>th</sup></b> ingredient.</p>
<h3>Output</h3>
<p>Print the maximum delish value of the dish that the chef can get.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>50</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>10000</b> </li>
<li> <b>-1000000000 (−10<sup>9</sup>)</b> ≤ <b>D[i]</b> ≤ <b>1000000000 (10<sup>9</sup>)</b>
</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
1 2 3 4 5
4
1 1 -1 -1

<b>Output:</b>
13
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br/><br />
Chef can choose <b>i = j = 1, k = 2, l = 5</b>.<br/><br />
The delish value hence obtained  is <b> | (2+3+4+5) − (1) | = 13 </b>.<br />
 </br/></br/></p>
<p><b>Example case 2.</b><br/><br />
 Chef can choose <b>i = 1, j = 2, k = 3, l = 4</b>.<br/><br />
The delish value hence obtained  is <b> | ( ( −1 ) + ( −1 ) ) − ( 1 + 1 ) | = 4 </b>.</br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-03-2013</td>
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