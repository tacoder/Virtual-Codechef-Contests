<?php require("../../includes/header.php"); ?><h1>Hard Disk</h1><div class="content">
<p>Dipu's hard disk crashed last week. He bought a new one and has already installed all necessary software. But he has lost his personal collection of media files. It is just unbearable! How can he avoid such a loss in future?
</p>
<p>
Dipu is planning to maintain a "fresh" second hard disk in his computer as a backup device. He wants to make sure that the backup hard disk is never too old, by replacing it with a new one every few months. This is what he will do: after a backup hard disk has been used for a few months, Dipu will buy a new hard disk, move all the data from the old backup disk to the new one and then sell the old one. He knows that he will have to sell an old backup disk at a price lower than its original price because of both depreciation and the drop in the market price of new hard disks. His goal is to keep the total cost of maintaining the backups as low as possible.
</p>
<p>
Given the prices of different models of hard disks in the next few months, your job is to determine the minimum cost of maintaining the backup disks in the same period of time. Assume: </p>
<ul>
<li>Dipu will only buy a new backup hard disk and sell the old one on the first day of a month. </li>
<li>He has no backup disk to sell on the first day of the first month. So he needs to buy a new backup disk on the first day of the first month, without selling.</li>
<li>The amount he will get by selling a hard disk is exactly <b>Tk 100</b> less than the current price of a new hard disk of the same model at the selling time. </li>
<li>the price of same model hard disks never goes up versus months, and always remains expensive than <b>Tk 100</b>. </li>
</ul>

<h3>Input</h3>
<p>Input consists of several datasets. Each dataset consists of the followings: </p>
<p>Tips:</p>
<ul>
<li>A line containing the name of the set. </li>
<li>A line containing 2 positive integers <b>n</b> and <b>m</b>, denoting respectively the number of different models of hard disks and the number of months to consider. </li>
<li>Each of next n lines contains the description of one hard disk. The description of a hard disk consists of its model name followed by m integers denoting its price on the first day of the m months in order. </li>
</ul>
<p> The end of input is marked with a line consisting of "TheEnd" (quotes for clarification). All data on a single line are separated by exactly one space. </p>
<h3>Output</h3>
<p>For each set of input, the output should contain the name of the set on the first line first. On the second line, output the minimum possible cost. Then, list several lines of hard disks used in those m months, in the order of their use (maybe less than m disks are used). For each hard disk, its name should be followed by the number of month(s) it will be used. At the end of each set, print an empty line.
</p>
<p>If there are multiple possibilities, any one of them is acceptable.
</p>
<p>The end of output should be marked with a line consisting of "TheEnd" (quotes for clarification).  See the sample output for details.
</p>
<h3>Constraints</h3>
<p>1 &lt; <b>n</b> &lt; 100, 1 &lt; <b>m</b> &lt; 200</p>
<p> The prices are below Tk 20,000 and non-increasing in the same line. </p>
<p> The name of sets and the name of a hard disk consist of 2 to 16 alphanumeric characters. </p>
<h3>Example</h3>
<pre><b>Input:</b>
FirstSet
2 4
Brand1 4000 3600 3500 3400
Brand2 3500 3500 3200 3000
SecondSet
4 8
Mintor 4500 4500 4400 4200 4000 3700 3500 3200
Rivergate 4500 4400 4300 4100 3900 3800 3600 3300 
EasternDigital 5000 4900 4800 4700 4500 4100 3700 3500
WesternAnalog 7500 7200 7000 6800 6500 6200 6000 5500
TheEnd


<b>Output:</b>
FirstSet
Tk 3400
Brand2 for 1 month(s)
Brand1 for 2 month(s)
Brand2 for 1 month(s)

SecondSet
Tk 4500
Mintor for 8 month(s)

TheEnd
</pre>
<p><b>
<p>Problem Setter : Dr. Mustaq Ahmed</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-12-2013</td>
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