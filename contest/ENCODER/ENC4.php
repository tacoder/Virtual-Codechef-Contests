<?php require("../../includes/header.php"); ?><h1>Rank</h1><div class="content">

<p> One of the criteria for ranking the websites over the internet could be, ranking on the basis of the number of references from other websites. References from a website to itself do not count.<br /><br />
You are given a list of references by different websites; you need to rank these websites. <br /><br />
The format of the each entry in the list is, website name (consisting of only uppercase English characters and spaces), followed by a comma and a space and then zero or more space seperated integers specifying the zero-based indices of the websites it cites. The indices are in accordance with the input specified example if the input is <br /><br />
TWITTER, 0 1 <br /><br />
GOOGLE, 2 3<br /><br />
TWITTER,<br /><br />
GOOGLE, 0 2<br /><br />
then Twitter is assigned index 0 &amp; 2 and Google as 1 &amp; 3, so on...<br /></p>
<p>But due to sloppy work the listing of the websites and the references are inappropriately done (Intentionally :)). It includes:<br /><br />
1) A Website reference pair may exist in more than one rows of the input (see example 1, the FACEBOOK INC is listed multiple times and may have different references).<br /><br />
2) There may exist multiple references from the given website to some other website, in that case count them only once. <br /><br />
3) Some sites may reference to themselves, in that case the reference will not be counted.<br /><br /><br />
Rules for ranking the websites are as follow:<br /><br />
1) The website referred more number of times is ranked higher. <br /><br />
2) If two websites were referred same number of times, the website with lexicographically earlier name first will be ranked higher.<br />
 </p>
<h3>Input</h3>
<p> First line of consists of the number of lines to follow. Next n (1&lt;=n&lt;=50) line consists of the website's name and the other websites they reference, in the format: <br /><br />
<i>Website name, reference1 reference2 </i><br /><br />
Each listing is of at most 100 characters long.<br />
 </p>
<h3>Output</h3>
<p>Output the final ranking for each website. The output should be one website name per line (see Example below). </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
9
GOOGLE INC,
FACEBOOK INC, 0
TWITTER INC, 0 1
GOOGLE INC,
FACEBOOK INC, 3
TWITTER INC, 4 3 3 4
ANOTHER GOOGLE INC,
ANOTHER FACEBOOK INC, 6
ANOTHER TWITTER INC, 6 7

<b>Output:</b>
ANOTHER GOOGLE INC
GOOGLE INC
ANOTHER FACEBOOK INC
FACEBOOK INC
ANOTHER TWITTER INC
TWITTER INC
</pre><p><br /><br /><br />
<b>Explanation:</b><br />
Reference for each website is ANOTHER GOOGLE INC - 2, GOOGLE INC -2, ANOTHER FACEBOOK INC - 1, FACEBOOK INC - 1, ANOTHER TWITTER INC - 0, TWITTER INC	- 0.<br />
The ANOTHER ones are lexicographically ranked higher than other non-ANOTHER ones.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kunalsangwan">kunalsangwan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>