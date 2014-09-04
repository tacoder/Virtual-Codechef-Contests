<?php require("../../includes/header.php"); ?><h1>Treasure Chest</h1><div class="content">

<p>Thorin wanted to protect what was left of his family's wealth before he embarked on his journey to retrieve Smaug's treasure. And though he was accompanied on the quest by manyof his race, and by Gandalf, he didn't want to take any chances; he hid a number of such chests, deep underground. And then they were lost. Until, they were discovered a couple ofcenturies ago. Countless men and women have tried since, tried and failed to open any of them. Few people know this, and most of the ones who did died a long time ago, but thedwarves were exceptionally good at making treasure chests, famous for their tricky locks. Each treasure chest had two numbers written on them, hidden in the intricate carvings. Andthough the role of these two numbers has been known for decades now, no one has been able to come any closer to opening any of them for there is a third number involved which is,perhaps, the most important of all. Written in plain sight in the Khuzdûl language, it remained a mystery until now. When a group of researches finally deciphered the ancient language.</p>
<p>The locks require an input based on the three numbers - let's call the first two 'k' and 's'. The dwarves were obsessed with primes and a particular series wherein each term was equalto the sum of the preceding two terms. The encryption required the treasure seeker to calculate the nth number in this series and then subtractk from that. let's call the result 'x'. 'n' is the number in the Khuzdûl language. The xth prime number was then calculated and 's' subsequently subtracted from it, giving 'y'. </p>
<p>Thorin didn't want to make it easy, so he added another round of protection. One would have to calculate the count of numbers relatively prime to ‘y’ to arrive at the answer which needs to befed to open the chest. However, in the rare case that y does not turn out to be a valid natural number, one needs to feed in -1. Given n k s, your task is to find out the code that'll unlock the chest.</p>
<h3>Input</h3>
<p>t test cases. t lines follow with 3 integers separated by a space</p>
<p>n k s</p>
<h3>Output</h3>
<p>t lines, each carrying the output for the t test cases.</p>
<p><b></b></p>
<h3>Note:</h3>
<p>1. All nth and xth number calculations are 1 – indexed.</p>
<p>2. The series for the nth number has its first two elements 0 and 1.
</p>
<p></p>
<h3>Contraints</h3>
<p>1&lt;=t&lt;=2000</p>
<p>1&lt;= n &lt;= 93</p>
<p>1&lt;=x&lt;=10<sup>8</sup></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
<p>2
</p><p>6 3 0
</p><p>10 12 12 

<b>Output:</b>
</p><p>2
</p><p>66
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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