<?php require("../../includes/header.php"); ?><h1>Contiguous Word</h1><div class="content">

<p>Aman loves solving English puzzles. His teacher taught him a new topic today called Contiguous Words.</p>
<p>A contiguous word is a word in which all the occurrences of each letter of the word is together (i.e. no same letter should be separated by one or more other letters). For example,</p>
<p>"aaabb" and "abc" are contiguous word.</p>
<p>"bitotsav" is not a contiguous word since the 't's don't occur together.</p>
<p>For the weekends the teacher gave Aman a homework on contiguous word. The homework is as follows:</p>
<p>The teacher divided contiguous word into several parts. Aman has to form the original contiguous word and print it. If more than one contiguous word can be formed print "MORE THAN ONE". If a contiguous word cannot be formed from the given parts print "NOT POSSIBLE" (all quotes for clarity).</p>
<p><b>Input Specification</b></p>
<ul>
<li>First line will contain the no. of test cases T.
</li>
<li>Each test case contains two lines of input. The first line contains the no. of parts K. The second line contains K strings separated by a single space, denoting parts.
</li>
</ul>
<p></p>
<p><b>Output Specification</b></p>
<ul>
<li>If only one contiguous word can be formed print the word.</li>
<li>If many such words can be formed print "MORE THAN ONE".</li>
<li>If no such contiguous word can be formed print "NOT POSSIBLE".</li>
</ul>
<p></p>
<p><b>Constraints</b></p>
<ul>
<li>1&lt;=T&lt;=300</li>
<li>1&lt;=K&lt;=50</li>
<li>Each part will contain between 1 to 20 characters, inclusive.</li>
<li>Each character of the parts will contain only lowercase letters (a-z).</li>
</ul>
<p></p>
<p><b>Sample Input</b></p>

<p><code><br />
4</code></p>
<p>3</p>
<p>zzzz zz z</p>
<p>2</p>
<p>ro ar</p>
<p>3</p>
<p>ro a r</p>
<p>2</p>
<p>ac cca</p>
<p></p>
<p></p>
<p><b>Sample Output</b></p>

<p><code><br />
zzzzzzz</code></p>
<p>arro</p>
<p>MORE THAN ONE</p>
<p>NOT POSSIBLE</p>
<p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/transcendence">transcendence</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>