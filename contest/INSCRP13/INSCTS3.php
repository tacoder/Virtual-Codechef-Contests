<?php require("../../includes/header.php"); ?><h1>Wonderland jewellery</h1><div class="content">
<p> </p>
<p>Wonderland Showroom is a a top neclace designer showroom in town . It's known for designing neclaces as customer wishes .A neclace is composed of a number of coloured beads. The colour of the beads is denoted by a lower case english alphabet for simplicity and design conventions. Alice is very fond of jewellery and wishes to purchase a "special" neclace on her birthday . Alice considers a neclace to be "special" if the following conditions are satisfied :<br />
1. All the bead colours occurring odd number of times are placed first and then the bead colurs occurring even number of times.<br />
2. The bead colors must also be in lexographically correct order.<br />
3. All similar beads must occur together.</p>
<p>The Wonderland showroom has already pre-designed neclace sets. But to ensure that Alice purchases the neclace from their showroom they need to<br />
redesign the neclaces to make it appear "special" . You are the chief designer in-charge.<br />
Can you redesign the beads to make it appear special ?<br />
<br /><br />
<b>Note:</b> String A is lexicographically smaller than string B if at the first position where A and B differ A contains a letter which is earlier in the alphabet than the corresponding letter in B.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains a single positive integer T . T test cases follow. Each line of the test cases contains a string s.</p>
<h3>Output</h3>
<p>For each test case output one line containing the "special" neclace that suits the requirements of Alice.</p>
<h3>Constraints</h3>
<ul>
<li>1&lt;=T&lt;=100</li>
<li>1&lt;=Length of string&lt;=1000</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
abaabccd
aaaabbb

<b>Output:</b>
aaadbbcc
bbbaaaa
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
The frequency of each character is as follows<br /><br />
1. a occurs 3 times . <br /><br />
2. b occurs 2 times . <br /><br />
3. c occurs 2 times . <br /><br />
4. d occurs 1 times .<br /><br />
<br /><br />
We need to place the beads occuring odd number of times at the beginning and in lexographical order.<br /><br />
'a' and 'd' are the only beads occuring odd number of times. 'a' occurs before 'd' in lexographical order.<br /><br />
So, we have ---&gt; aaad<br /></p>
<p>Now, we need to place the beads occuring even number of times and in lexographical order.<br /><br />
'b' and 'c' occur even number of times<br /><br />
So, we have ---&gt; aaad + bbcc = aaadbbcc<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tavan_edla">tavan_edla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-10-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>