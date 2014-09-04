<?php require("../../includes/header.php"); ?><h1>A New Number System</h1><div class="content">

<p>As we know, in an n-based number system, there are n different types of digits. In this way, a 1-based number system has only 1 type of digit, the &lsquo;0&rsquo;. Here are the rules to interpret 1-based numbers. Each number consists of some space separated blocks of 0. A block may have 1, 2 or more 0s. There is a &lsquo;flag&rsquo; variable associated with each number </p>
<ul>
<li>A block with a single 0 sets &lsquo;flag&rsquo; variable to 1 </li>
<li>A block with two 0s sets the &lsquo;flag&rsquo; to 0 </li>
<li>If there are n (n &gt; 2) 0s in a block, &quot;cmmi-10x-x-109&quot;&gt;n-2 binary digits with the current value of flag is appended to your number.</li>
</ul>

<p>Note that, the first block of every number will have at most 2 0s. For example, the 1-base number 0 0000 00 000 0 0000 is equivalent to binary 11011. </p>
<ul>
<li>1st block sets the flag to 1. </li>
<li>2nd block has 4 0s. So append flag(= 1) 42 = 2 times (11).</li>
<li>3rd block has 2 0s. Set the flag to 0. </li>
<li>4th block has 3 0s. Append flag(= 0) 3 &quot;cmsy-10x-x-109&quot;&gt;&#8722; 2 = 1 time (110). </li>
<li>5th block has a single 0. Set flag = 1. </li>
<li>6th and block has 4 0s. Append flag(= 0) 4 &quot;cmsy-10x-x-109&quot;&gt;&#8722; 2 = 2 times (11011). </li>
</ul>

<p>The final binary number wont have more than 30 digits. Once, youve completed the process, convert the binary value to decimal &amp; print, youre done! </p>
<h3>Input</h3>
<p>Input will have at most 100 test cases. Each case consists of a 1-based number as described above. A number may be spanned to multiple lines but a single block will always be in a single line. Termination of a case will be indicated by a single &lsquo;#&rsquo; char which will be space-separated from the last digit of your input number. The last case in the input is followed by a &lsquo; &quot;cmsy-10x-x-109&quot;&gt;&#8764;&rsquo; character indicating, end of input. </p>
<h3>Output </h3>

<p>For each test case, output a single line with the decimal equivalent value of your given 1-based number.</p>
<h3>Sample input and output</h3>
<pre>
    stdin
    0 "cmtt-10x-x-109"&gt;0000 00
    000 "cmtt-10x-x-109"&gt;0 0000
    #
    0 "cmtt-10x-x-109"&gt;000 #
    ~
    </pre><pre>
    stdout
    27
    1
    </pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>