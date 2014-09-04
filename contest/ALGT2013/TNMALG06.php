<?php require("../../includes/header.php"); ?><h1>RECALLING NUMBERS</h1><div class="content">

<p>Our little chef is little dumb. So much dumb that when his crush gave him her number he forgets it. But since little dumbo chef is such a good friend of yours you decided to help him. Here is some vague memories of the number that chef can recall :</p>
<p>1.It is a palindrome.</p>
<p>2.It is a prime number.</p>
<p>3.It is of n digits ( 4 &lt; n &lt; 11 ).</p>
<p>After digesting a memory enhancement pill he recalls (n-2) digits of the number. Now since the search criteria is so much narrowed, you are to write a program which prints number of possible candidates of the phone number of his crush.</p>
<p>A number is a successful candidate if : </p>
<p>1. It is prime and a palindrome.</p>
<p>2. It is of n digits.</p>
<p>3. Only deletion of two digits from the potential candidate makes it equal to the number which the chef has recalled.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases, for each test case enter the number sequence recalled by chef of N - 2 digits and digits of original number i.e N</p>
<h3>Output</h3>
<p>For each test case, output a single line with number of phone numbers possible.</p>
<h3>Constraints</h3>
<ul>
<li><b>4</b> ≤ <b>N</b> ≤ <b>11</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
37343 7
57675 7
<b>Output:</b>
1
1
</pre><h3>Explanation</h3>
<p><b>Case 1 :</b> 1 number is possible i.e  3743473</p>
<p><b>Case 2 :</b> 1 number is possible i.e. 7576757</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/paramjeet">paramjeet</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, JS, PAS fpc, PAS gpc, PHP, PYTH, PYTH 3.1.2, RUBY</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>